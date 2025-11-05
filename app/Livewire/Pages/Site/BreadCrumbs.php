<?php

namespace App\Livewire\Pages\Site;

use Livewire\Component;

class BreadCrumbs extends Component
{
    public array $segments = [];

    public function mount()
    {
        // Obtém a URL atual (ex: https://meusite.com/produtos/telemoveis/samsung)
        $currentUrl = url()->current();

        // Divide em partes (['', 'produtos', 'telemoveis', 'samsung'])
        $parts = explode('/', parse_url($currentUrl, PHP_URL_PATH));

        // Remove entradas vazias (ex: primeira '/')
        $parts = array_filter($parts);

        // Cria uma estrutura com 'label' e 'url' para cada segmento
        $breadcrumbs = [];
        $path = '';

        foreach ($parts as $part) {
            $path .= '/' . $part;

            $breadcrumbs[] = [
                'label' => ucfirst($part), // primeira letra maiúscula
                'url'   => url($path),
            ];
        }

        $this->segments = $breadcrumbs;
    }

    public function render()
    {
        return view('livewire.pages.site.bread-crumbs');
    }
}
