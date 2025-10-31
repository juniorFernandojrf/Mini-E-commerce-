<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Auth;

class AuthHelper
{
    /**
     * Verifica se o utilizador está autenticado.
     */
    public static function isAuthenticated(): bool
    {
        return Auth::check();
    }

    /**
     * Verifica se o utilizador autenticado é administrador.
     */
    public static function isAdmin(): bool
    {
        return Auth::check() && Auth::user()->role_id === 1;
    }

    /**
     * Verifica se o utilizador autenticado é um utilizador normal.
     */
    public static function isUser(): bool
    {
        return Auth::check() && Auth::user()->role_id === 2;
    }

    public static function dashboard()
    {
        if (!AuthHelper::isAuthenticated()) {
            return redirect()->route('login')->with('error', 'Por favor, faça login primeiro.');
        }

        if (AuthHelper::isAdmin()) {
            return redirect()->intended(route('dashboard'));
        }

        if (AuthHelper::isUser()) {
            return redirect()->intended(route('home'));
        }

        abort(403, 'Acesso negado');
    }
}
