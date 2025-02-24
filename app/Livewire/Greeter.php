<?php

namespace App\Livewire;

use App\Models\Greeting;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required|min:3')]
    public $name = '';
    public $greeting = '';
    public $greetings = [];
    public $greetingMessage = '';

    public function changeGreeting(): void
    {
        $this->reset('greetingMessage');
//        $this->validate([
//           'name' => 'required|min:3',
//        ]);
        $this->validate(); // if we comment this line the validation will work but will not stop the code from executing
        $this->greetingMessage = "{$this->greeting}, {$this->name}!";
//        $this->reset('name');
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3',
        ];
    }

    public function mount()
    {
        $this->greetings = Greeting::all();
    }

//    public function updated($propertyName, $value)
//    {
//        if($propertyName === 'name') {
//            $this->name = strtoupper($value);
//        }
//    }

    public function updatedName($value)
    {
        $this->name = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
