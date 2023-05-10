<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with('packet')->simplePaginate(10);
        $customers_count = Customer::all()->count();
        return view('pages/member/member', compact('customers', 'customers_count'));
    }

    public function store(Request $request)
    {
        if ($request->exp_subscribe != null) {
            $status = 'Berlangganan';
        } else {
            $status = 'Uji Coba';
        }

        // Transaction create
        Customer::create([
            'status' => $status,
            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'store_name' => $request->store_name,
            'phone_number' => $request->phone_number,
            'exp_trial' => $request->exp_trial,
            'exp_subscribe' => $request->exp_subscribe,
            'packets_id' => $request->packets_id
        ]);

        return redirect()->route('member.index');
    }

    public function edit($id)
    {
        $packets = Packet::all();
        $item = Customer::findOrFail($id);

        return view('pages.member.member-edit', [
            'item' => $item,
            'packets' => $packets
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Customer::findOrFail($id);

        $item->update($data);

        return redirect()->route('member.index');
    }

    public function destroy($id)
    {
        $item = Customer::findOrFail($id);

        $item->delete();

        return redirect()->route('member.index');
    }
}
