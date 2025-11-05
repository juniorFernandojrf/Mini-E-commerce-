<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Site' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <body class="bg-gray-50 font-sans">

        <!-- Cabeçalho -->
        <livewire:pages.site.header />

        <!-- Conteúdo Principal -->
        <livewire:pages.site.product-section />

        <!-- Rodapé -->
        <livewire:pages.site.footer />
        @livewireScripts
    </body>

</html>
