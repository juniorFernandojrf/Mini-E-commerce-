<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Site' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50 font-sans">

    <!-- Cabeçalho -->
    <livewire:pages.site.header />

    <!-- Banner -->
    <livewire:pages.site.content.hot-deal />
    
    <!-- Conteúdo Principal -->
    <livewire:pages.site.product-section />
    

    <!-- Rodapé -->
    <livewire:pages.site.footer />
    @livewireScripts
</body>
</html>
