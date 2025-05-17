<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Api de Gestion de Citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php
                        $user = Auth::user();
                    @endphp
                    
                    @if ($user->role === 'taller')
                        <h1 class="text-lg font-medium mb-2">
                            ¡Hola {{ $user->name }}! 👋 
                        </h1>
                        <p> 
                            Estás conectado con funciones de {{ $user->role }}
                        </p>

                        <br>
                        
                        <p class="text-gray-700">
                            ¡Bienvenido al panel del taller! Aquí puedes gestionar los vehículos en reparación, ver citas programadas y actualizar el estado de los trabajos.
                        </p>
                    @elseif ($user->role === 'cliente')
                        <p class="text-gray-700">
                            ¡Hola {{ $user->name }}! Aquí puedes consultar el estado de tu vehículo, ver tus citas y ponerte en contacto con el taller.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>