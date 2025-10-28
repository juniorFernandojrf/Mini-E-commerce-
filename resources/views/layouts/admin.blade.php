<!DOCTYPE html>
<html lang="pt" x-data="{ sidebarOpen: false, darkMode: false }" x-bind:class="{'dark': darkMode}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Painel Admin' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Alpine.js (para sidebar dinâmica) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

    <!-- Navbar (fixa) -->
    <header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 px-4 py-3">
        <!-- Botão Sidebar (mobile) -->
        <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 rounded-md bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <h1 class="text-lg font-semibold">Painel Admin</h1>

        <!-- Ações do utilizador -->
        <div class="flex items-center gap-4">
            <!-- Botão modo escuro -->
            <button @click="darkMode = !darkMode" class="p-2 rounded-md bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h1M3 12H2m15.364-7.364l.707.707M5.636 18.364l-.707.707M18.364 18.364l.707-.707M5.636 5.636l-.707-.707M12 5a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7z" />
                </svg>
                <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9 9 0 0 1 9.001 2.25a7.5 7.5 0 1 0 12.751 12.751z" />
                </svg>
            </button>

            <!-- Perfil -->
            <div class="flex items-center gap-2">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
                <span class="hidden sm:block">Admin</span>
            </div>
        </div>
    </header>

    <!-- Layout Principal -->
    <div class="flex pt-16"> <!-- pt-16 = compensar a altura do header fixo -->

        <!-- Sidebar -->
        <aside 
            class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 transform lg:translate-x-0 transition-transform duration-300 z-40"
            x-bind:class="{'-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen}"
        >
            <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
                <span class="text-lg font-semibold">Menu</span>
                <button @click="sidebarOpen = false" class="lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <nav class="p-4 space-y-2">
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-blue-50 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v13" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-blue-50 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A4.992 4.992 0 0 0 4 21h16a4.992 4.992 0 0 0-1.121-3.196M9 10a3 3 0 1 1 6 0v1m-6 0h6" />
                    </svg>
                    <span>Utilizadores</span>
                </a>
            </nav>
        </aside>

        <!-- Conteúdo -->
        <main class="flex-1 min-h-screen p-6 lg:ml-64 overflow-y-auto">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>
</html>
