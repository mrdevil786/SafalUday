<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    public function index(){
        $subscribers = Subscriber::get();
        return view('admin.subscriber.index',compact('subscribers'));
    }
}
