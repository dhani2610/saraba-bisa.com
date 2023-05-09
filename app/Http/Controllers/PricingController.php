<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Packet;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $basic = Packet::find(1);
        $premium = Packet::find(2);
        $basicFeatures = Feature::where('packets_id', 1)->get();
        $premiumFeatures = Feature::where('packets_id', 2)->get();
        return view('pages/pricing', compact('basic', 'premium', 'basicFeatures', 'premiumFeatures'));
    }
}
