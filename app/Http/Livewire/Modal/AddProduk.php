<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use Illuminate\Support\Str;

class AddProduk extends Component
{
    public function render()
    {
        return view('livewire.modal.add-produk', [
            'string' => Str::random(10),
        ]);
    }
}