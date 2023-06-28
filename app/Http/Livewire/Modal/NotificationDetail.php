<?php

namespace App\Http\Livewire\Modal;

use App\Models\Produk;
use Livewire\Component;
use App\Models\Checkout;
use App\Models\Notifikasi;

class NotificationDetail extends Component
{
    public $index;
    public function mount($index) {
        $this->index = $index;
    }
    
    public function render()
    {
        $pesan = Notifikasi::where('id', $this->index)->first();
        $data = Checkout::where('id', $pesan->checkout_id)->first();
        $produk = Produk::where('id', $data->produk_id)->first();
        return view('livewire.modal.notification-detail', [
            'data'=>$data,
            'produk'=>$produk,
            'pesan'=>$pesan,
        ]);
    }
}