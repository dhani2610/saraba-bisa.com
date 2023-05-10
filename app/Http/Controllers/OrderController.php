<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Packet;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        $orders_count = Order::all()->count();
        return view('pages/transaksi/pendaftaran', compact('orders', 'orders_count'));
    }

    public function edit($id)
    {
        $packets = Packet::all();
        $item = Order::findOrFail($id);

        return view('pages.transaksi.pendaftaran-edit', [
            'item' => $item,
            'packets' => $packets
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Order::findOrFail($id);

        $item->update($data);

        return redirect()->route('pendaftaran.index');
    }

    public function destroy($id)
    {
        $item = Order::findOrFail($id);

        $item->delete();

        return redirect()->route('pendaftaran.index');
    }
}
