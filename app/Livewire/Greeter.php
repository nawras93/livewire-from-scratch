<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = 'John';

    public function changeName($newName)
    {
        return $this->name = $newName;
    }
    public function render()
    {
        return view('livewire.greeter');
    }
}
