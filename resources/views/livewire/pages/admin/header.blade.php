 <!-- Navbar (fixa) -->
 <header
     class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 px-4 py-3">
     <!-- Botão Sidebar (mobile) -->
     <button @click="sidebarOpen = !sidebarOpen"
         class="lg:hidden p-2 rounded-md bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
             <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
         </svg>
     </button>

     <h1 class="text-lg font-semibold">Painel Admin</h1>

     <!-- Ações do utilizador -->
     <div class="flex items-center gap-4">
         <!-- Botão modo escuro -->
         <button @click="darkMode = !darkMode"
             class="p-2 rounded-md bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
             <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M12 3v1m0 16v1m9-9h1M3 12H2m15.364-7.364l.707.707M5.636 18.364l-.707.707M18.364 18.364l.707-.707M5.636 5.636l-.707-.707M12 5a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7z" />
             </svg>
             <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M21.752 15.002A9 9 0 0 1 9.001 2.25a7.5 7.5 0 1 0 12.751 12.751z" />
             </svg>
         </button>

         <!-- Perfil -->
         <div class="flex items-center gap-2">
             <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
             <span class="hidden sm:block">Admin</span>
         </div>
     </div>
 </header>
