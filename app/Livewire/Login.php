<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:3|max:10')]
    public $password;
    public $loginErrorMessage;

    public function authenticate(): void
    {
        $this->validate();

        $valid = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if ($valid) {
            $this->redirectIntended('/');
        } else {
            $this->loginErrorMessage = 'Incorrect email and/or password';
        }
    }
}
