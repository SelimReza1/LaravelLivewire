<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormValidation extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'msg'   => 'required|min:20'
        ]);
    }

    public function submitForm(){
        $this->validate([
           'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'msg'   => 'required|min:20'
        ]);
    }
    public function render()
    {
        return view('livewire.form-validation');
    }
}
