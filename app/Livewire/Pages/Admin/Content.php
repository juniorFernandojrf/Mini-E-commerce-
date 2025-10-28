<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.content')
            ->layout('layouts.admin');
    }
}
