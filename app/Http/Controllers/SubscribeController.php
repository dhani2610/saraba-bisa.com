<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\Order;
use App\Models\Packet;
use Illuminate\Http\Request;
use App\Mail\OrderNotification;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function index()
    {
        $packets = Packet::all();
        return view('pages/subscribe', compact('packets'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Order::create($data);

        return redirect()->route('kirim-email');
    }

    public function checkout()
    {
        return view('pages/checkout');
    }

    public function success()
    {
        return view('pages/register-success');
    }
}
