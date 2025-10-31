<?php

namespace App\Livewire\Pages\Auth;

use App\Http\Helpers\AuthHelper;
use App\Livewire\Forms\LoginForm;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    // Instância do formulário (a classe que estudamos)
    public LoginForm $form;

    /**
     * Método chamado quando o usuário clica em "Entrar"
     */
    public function login()
    {
        // Valida e autentica
        $this->form->authenticate();

        // Regenera o ID da sessão (boa prática de segurança)
        Session::regenerate();

        return AuthHelper::dashboard();        
    }

    public function render()
    {
        // @phpstan-ignore-next-line
        return view('livewire.pages.auth.login')
            ->layout('layouts.auth', ['title' => 'Login']);
    }
}
