{{-- menú lateral funcionalidades cliente --}}
<aside class="w-64 bg-white dark:bg-gray-800 border-r min-h-screen flex flex-col p-4">
    
    {{-- agrupación de funcionalidades juntas --}}
    <div class="flex flex-col space-y-1">
        <x-nav-link :href="route('cliente.citas.index')" :active="request()->routeIs('cliente.citas.index')">
            Ver citas pendientes
        </x-nav-link>

        <x-nav-link :href="route('cliente.citas.create')" :active="request()->routeIs('cliente.citas.create')">
            Crear nueva cita
        </x-nav-link>
    </div>

</aside>
