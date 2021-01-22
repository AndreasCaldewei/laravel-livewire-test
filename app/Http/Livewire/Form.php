<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{

    public $firstname = "";
    public $lastname = "";
    public $email = "";


    public function validForm()
    {
        $validated = Validator([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email], [

            'email' => 'required|email',
            'firstname' => 'required',
            'lastname' => 'required',

        ]);

        if ($validated->fails()) {
            return [
                'valid' => false,
                'messages' => $validated->messages()
            ];
        } else {
            return [
                'valid' => true
            ];
        }

    }

    public function render()
    {

        $valid = $this->validForm();

        return view('livewire.form', [
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'valid'=> $valid['valid'],
            'messages' => $valid['messages'] ?? ''
        ]);
    }
}
