<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserCrear extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.user-crear');
    }

}
