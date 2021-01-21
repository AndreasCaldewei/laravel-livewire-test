<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{

    public $input = "";

    public function render()
    {
        return view('livewire.input', [
            'input' => $this->input
        ]);
    }
}
