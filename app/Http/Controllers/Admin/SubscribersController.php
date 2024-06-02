<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::latest()->get();
        return view('admin.subscriber.index', compact('subscribers'));
    }

    // DELETE A SUBSCRIBER
    public function destroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->route('admin.subscribers.index')->with('success', 'Subscriber deleted successfully!');
    }

    // TRUNCATE ALL SUBSCRIBERS
    public function truncate()
    {
        Subscriber::truncate();

        return redirect()->route('admin.subscribers.index')->with('success', 'All subscribers deleted successfully!');
    }
}
