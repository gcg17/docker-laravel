<x-app-layout>
    <x-slot name="header">
        Mis citas
    </x-slot>

    <!-- Verifica si el usuario tiene citas -->
    @if ($citas->isEmpty())
        <p class="text-center">No tienes citas</p>
    @else
        <ul class="list-disc pl-5">
            @foreach($citas as $cita)
                <li class="mb-2">
                    <strong>{{ $cita->marca }}</strong> - 
                    <em>{{ $cita->modelo }}</em> 
                    ({{ $cita->matricula }})
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Enlace para solicitar una nueva cita con botón verde -->
    <div class="mt-4 text-center">
        <a href="{{ route('cliente.citas.create') }}" 
           class="inline-block bg-black-500 text-black px-6 py-2 rounded-lg text-lg hover:bg-black-700 transition duration-200">
            Solicitar nueva cita 📆
        </a>
    </div>
</x-app-layout>