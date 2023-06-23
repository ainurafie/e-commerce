<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class Pengunjung extends Component
{
    public function render()
    {
        $user = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', 'Terkirim');
        })->distinct()->get('user_id')->count();
        return view('livewire.card.pengunjung', ['user' => $user]);
    }
}