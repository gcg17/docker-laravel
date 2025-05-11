<x-app-layout>
    <x-slot name="header">
        Mis citas
    </x-slot>

    <!-- Verifica si el usuario tiene citas -->
    @if ($citas->isEmpty())
    <div>    
    <p class="text-center">No tienes citas pendientes</p>
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
    </div>
    
</x-app-layout>