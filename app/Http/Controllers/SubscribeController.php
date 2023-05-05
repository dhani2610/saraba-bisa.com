<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $packets = Packet::all();
        return view('pages/subscribe', compact('packets'));
    }
}
