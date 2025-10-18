<div class="bg-gray-50 dark:bg-gray-900 py-10">
    <div class="container mx-auto px-4 grid md:grid-cols-4 gap-6">

        <!-- ASIDE: filtros -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 shadow-md">
            <livewire:store.filters />
        </div>

        <!-- MAIN: produtos -->
        <div class="md:col-span-3">
            <livewire:store.products />
        </div>

    </div>
</div>
