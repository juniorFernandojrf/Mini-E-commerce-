<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    public $currentUrl;

    public function render()
    {
        $current_url  = url()->current();
        $exploded_url = explode('/', $current_url);
        $this->currentUrl =  $exploded_url[3] . ' ' . $exploded_url[4] ?? '';    


        return view('livewire.pages.admin.admin-dashboard')
            ->layout('layouts.admin');
    }
}
