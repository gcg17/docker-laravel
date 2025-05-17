{{-- menú lateral funcionalidades taller --}}
<aside class="w-64 bg-white dark:bg-gray-800 border-r min-h-screen flex flex-col p-4">
    
    {{-- agrupación de funcionalidades juntas --}}
    <div class="flex flex-col space-y-1">
        <x-nav-link :href="route('taller.citas.index')" :active="request()->routeIs('taller.citas.index')">
            Gestion de citas
        </x-nav-link>

        <x-nav-link :href="route('taller.citas.create')" :active="request()->routeIs('taller.citas.create')">
            Crear nueva cita
        </x-nav-link>
    </div>

</aside>
