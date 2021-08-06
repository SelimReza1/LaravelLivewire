<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
            <h3>This is user component</h3>
            </div>
        blade;
    }
}
