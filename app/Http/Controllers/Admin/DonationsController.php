<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Payment;
use App\Http\Controllers\Controller;

class DonationsController extends Controller
{
    public function index()
    {
        $donations = Payment::get();
        return view('admin.donation.index', compact('donations'));
    }

    // DELETE A SUBSCRIBER
    public function destroy($id)
    {
        $donation = Payment::findOrFail($id);
        $donation->delete();

        return redirect()->route('admin.subscribers.index')->with('success', 'Subscriber deleted successfully!');
    }

    // TRUNCATE ALL SUBSCRIBERS
    public function flush()
    {
        $oneHourAgo = Carbon::now()->subHour();

        $deletedPayments = Payment::where('status', 'pending')
            ->where('updated_at', '<', $oneHourAgo)
            ->delete();

        return redirect()->route('admin.donations.index')->with('success', 'Deleted ' . $deletedPayments . ' pending payments older than 1 hour.');
    }
}
