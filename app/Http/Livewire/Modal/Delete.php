<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Delete extends Component
{
    public $index;
    public function mount($index) {
        $this->index = $index;
    }
    public function render()
    {
        return view('livewire.modal.delete', ['index'=>$this->index]);
    }
}