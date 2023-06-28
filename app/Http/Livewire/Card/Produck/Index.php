<?php

namespace App\Http\Livewire\Card\Produck;

use App\Models\Checkout;
use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $terlaris;
    public $kategori;
    public function mount($terlaris = NULL, $kategori = NULL) {
        $this->terlaris = $terlaris;
        $this->kategori = $kategori;
    }

    public function render()
    {
        if(Auth::user()->role == 'penjual') {
            $data = Produk::where('user_id', Auth::user()->id)->get();
            return view('livewire.card.produck.index', ['data'=>$data]);
        }else {
            $data = Produk::all();
            if($this->terlaris != NULL) {
                $data = Produk::orderBy('terjual', 'DESC')->get();
            }
            if($this->kategori != NULL) {
                $data = Produk::where('jenis', $this->kategori)->get();
            }
            
            return view('livewire.card.produck.index', [
                'data'=>$data,
            ]);
        }
    }
}