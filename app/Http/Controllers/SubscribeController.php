<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Packet;
use Illuminate\Http\Request;

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

        return redirect()->route('checkout');
    }

    public function checkout()
    {
        return view('pages/checkout');
    }
}
