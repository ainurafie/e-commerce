<?php

namespace App\Http\Livewire\Modal;

use App\Models\Produk;
use Livewire\Component;

class Ukuran extends Component
{
    public $index;
    public function mount($index) {
        $this->index = $index;
    }
    public function render()
    {
        $produk = Produk::where('id', $this->index)->first();
        return view('livewire.modal.ukuran', [
            'produk' => $produk,
            'ukuran'=>$produk->ukuran,
            'varian'=>$produk->varian,
        ]);
    }
}