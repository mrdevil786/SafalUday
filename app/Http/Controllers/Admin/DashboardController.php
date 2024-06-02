<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $donations = Payment::where('status', 'success')->get();

        $totalAmount = $donations->sum('amount');

        $previousWeekAmount = Payment::where('status', 'success')
            ->where('created_at', '>=', now()->subWeek())
            ->where('created_at', '<', now())
            ->sum('amount');

        $percentIncrease = $previousWeekAmount > 0 ? (($totalAmount - $previousWeekAmount) / $previousWeekAmount) * 100 : 0;

        return view('admin.dashboard', compact('donations', 'totalAmount', 'percentIncrease'));
    }
}
