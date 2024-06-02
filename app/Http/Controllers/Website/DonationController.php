<?php

namespace App\Http\Controllers\Website;

use Razorpay\Api\Api;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function index()
    {
        return view('site.donate');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $order = $api->order->create([
            'receipt' => 'rcptid_' . time(),
            'amount' => $request->amount * 100, // Amount in paise
            'currency' => 'INR'
        ]);

        $payment = new Payment();
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->amount = $request->amount;
        $payment->order_id = $order->id;
        $payment->save();

        $data = [
            "key" => env('RAZORPAY_KEY'),
            "amount" => $request->amount * 100,
            "name" => $request->name,
            "description" => "Donation to Safaluday NGO",
            "prefill" => [
                "name" => $request->name,
                "email" => $request->email
            ],
            "order_id" => $order->id
        ];

        return view('razorpay.razorpay-checkout', compact('data'));
    }

    public function paymentSuccess(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if ($payment->status == 'captured') {
            $order = Payment::where('order_id', $payment->order_id)->first();
            $order->payment_id = $request->razorpay_payment_id;
            $order->status = 'success';
            $order->save();
            return view('razorpay.thank-you');
        }

        return view('site.donate')->with('error', 'Payment failed');
    }
}
