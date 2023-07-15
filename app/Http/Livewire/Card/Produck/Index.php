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
    public $index;
    public $batas;
    public function mount($terlaris = NULL, $kategori = NULL, $index = NULL, $batas = NULL) {
        $this->terlaris = $terlaris;
        $this->kategori = $kategori;
        $this->index = $index;
        $this->batas = $batas;
    }

    public function render()
    {
        if(Auth::user()->role == 'penjual') {
            $data = Produk::where('user_id', Auth::user()->id)->get();
            return view('livewire.card.produck.index', ['data'=>$data]);
        }else {
            $data = Produk::all();
            if($this->batas != NULL) {
                $data = Produk::orderBy('created_at', 'DESC')->limit($this->batas)->get();
            }
            if($this->terlaris != NULL) {
                $data = Produk::orderBy('terjual', 'DESC')->get();
                if($this->batas != NULL) {
                    $data = Produk::orderBy('terjual', 'DESC')->limit($this->batas)->get();
                }
            }
            if($this->kategori != NULL) {
                $data = Produk::where('jenis', $this->kategori)->get();
            }
            if($this->index != NULL) {
                $data = Produk::where('user_id', $this->index)->get();
            }
            // if($this->batas != NULL) {
            //     $batas = Produk::where('user_id', $this->index)->get();
            // }
            
            return view('livewire.card.produck.index', [
                'data'=>$data,
            ]);
        }
    }
}