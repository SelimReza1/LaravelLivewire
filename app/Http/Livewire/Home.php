<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    Public $name;

    public function mount(){
        $this->name = request()->name;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
