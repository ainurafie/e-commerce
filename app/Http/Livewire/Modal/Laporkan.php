<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Laporkan extends Component
{
    public $index;
    public $penjual;

    public function index($index, $penjual) {
        $this->index = $index;
        $this->penjual = $penjual;
    }
    public function render()
    {
        return view('livewire.modal.laporkan', [
            'data'=> $this->index,
            'penjual'=> $this->penjual,
        ]);
    }
}