<?php

namespace App\Http\Livewire\Navbar;

use App\Models\Notifikasi;
use Livewire\Component;

class Index extends Component
{
    public $index;
    public function mount($index) {
        $this->index = $index;
    }
    public function render()
    {
        $notifikasi = Notifikasi::where('user_id', $this->index)->orderBy('created_at', 'DESC')->paginate(5);
        return view('livewire.navbar.index', ['notifikasi' => $notifikasi]);
    }
}