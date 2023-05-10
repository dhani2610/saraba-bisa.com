<?php

namespace App\Http\Livewire;

use App\Models\Packet;
use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;

class Member extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $search;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $packets = Packet::all();
        $members_count = Customer::all()->count();
        return view('livewire.member', [
            'packets' => $packets,
            'members_count' => $members_count,
            'customers' => $this->search === null ?
                Customer::latest()->paginate($this->paginate) :
                Customer::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }
}
