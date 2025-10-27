<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        // @phpstan-ignore-next-line
        return view('livewire.pages.auth.login')
            ->layout('layouts.auth', ['title' => 'Login']);
    }
}
