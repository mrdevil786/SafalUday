<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Razorpay\Api\Api;
use App\Models\Payment;
use Illuminate\Console\Command;

class CheckPaymentStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payments:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check payment status and update database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            $pendingPayments = Payment::where('status', 'pending')->get();

            if ($pendingPayments->isEmpty()) {
                $this->info('No pending payments found.');
                return;
            }

            foreach ($pendingPayments as $payment) {
                try {
                    $razorpayOrder = $api->order->fetch($payment->order_id);
                } catch (\Exception $e) {
                    $this->error('Order ID not found for payment ID: ' . $payment->id . '. Deleting payment record.');
                    $payment->delete();
                    continue;
                }

                $razorpayPayments = $razorpayOrder->payments();

                if (empty($razorpayPayments['items'])) {
                    continue;
                }

                $latestPayment = collect($razorpayPayments['items'])->sortByDesc('created_at')->first();

                if ($latestPayment === null) {
                    continue;
                }

                if ($latestPayment->status == 'captured') {
                    $payment->status = 'success';
                    $payment->payment_id = $latestPayment->id;
                } elseif ($latestPayment->status == 'failed') {
                    $payment->status = 'failed';
                }

                $payment->save();
            }

            $this->info('Payment status checked and updated successfully.');

            $this->deleteOldPendingPayments();
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
        }
    }

    private function deleteOldPendingPayments()
    {
        $oneHourAgo = Carbon::now()->subHour();
        Payment::where('status', 'pending')
            ->where('created_at', '<', $oneHourAgo)
            ->delete();

        $this->info('Old pending payments deleted successfully.');
    }
}
