<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class Pembayaran extends Component
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
        $invoices_count = Invoice::all()->count();
        return view('livewire.pembayaran', [
            'invoices_count' => $invoices_count,
            'invoices' => $this->search === null ?
                Invoice::latest()->paginate($this->paginate) :
                Invoice::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }
}
