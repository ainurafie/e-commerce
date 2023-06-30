<?php

namespace App\Http\Livewire\Modal;

use App\Models\Laporan as ModelsLaporan;
use Livewire\Component;

class Laporan extends Component
{
    public $index;

    public function mount($index) {
        $this->index = $index;
    }
    public function render()
    {
        $data = ModelsLaporan::where('id', $this->index)->first();
        return view('livewire.modal.laporan', [
            'data' => $data,
        ]);
    }
}