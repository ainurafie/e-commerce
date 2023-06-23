<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Payment extends Component
{
    // public $payment;
    // public $temp;
    // public function mount($payment = 'COD') {
    //     $this->temp = $payment;
    // }
    public function render()
    {
        return view('livewire.modal.payment');
    }
}