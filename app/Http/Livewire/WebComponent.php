<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WebComponent extends Component
{

    public $input = "";
    public $date = "";

    public function render()
    {
        return view('livewire.web-component', [
            'input' => $this->input,
            'date' => $this->date
        ]);
    }
}
