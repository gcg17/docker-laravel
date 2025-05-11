<x-app-layout>
    <x-slot name="header">Mis citas</x-slot>
    
    @if ($citas->isEmpty())
    <p>No tienes citas.</p>

    <ul>
    @foreach($citas as $cita)
        <li>{{ $cita->marca }} - {{ $cita->modelo }} ({{ $cita->matricula }})</li>
    @endforeach
    </ul>
    @endif

    <a href="{{ route('cliente.citas.create') }}">Solicitar nueva cita</a>
</x-app-layout>