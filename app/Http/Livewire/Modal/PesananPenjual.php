<?php

namespace App\Http\Livewire\Modal;

use App\Models\Checkout;
use Livewire\Component;

class PesananPenjual extends Component
{
    public $index;
    public function mount($index) {
        $this->index = $index;
    }
    public function render()
    {
        $data = Checkout::where('id', $this->index)->first();
        return view('livewire.modal.pesanan-penjual', ['data'=>$data]);
    }
}