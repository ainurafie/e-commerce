<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class Terjual extends Component
{
    public function render()
    {
        $data = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', 'Terkirim');
        })->get();
        return view('livewire.card.terjual', ['data'=>$data]);
    }
}