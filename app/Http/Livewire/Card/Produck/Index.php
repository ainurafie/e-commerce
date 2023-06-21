<?php

namespace App\Http\Livewire\Card\Produck;

use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public function render()
    {
        if(Auth::user()->role == 'penjual') {
            $data = Produk::where('user_id', Auth::user()->id)->get();
            return view('livewire.card.produck.index', ['data'=>$data]);
        }else {
            $data = Produk::all();
            return view('livewire.card.produck.index', ['data'=>$data]);
        }
    }
}