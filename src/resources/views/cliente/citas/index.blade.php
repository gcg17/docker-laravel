<x-app-layout>
    <x-slot name="header">Mis citas</x-slot>

    @foreach($citas as $cita)
        <div>{{ $cita->marca }} - {{ $cita->modelo }} ({{ $cita->matricula }})</div>
    @endforeach

    <a href="{{ route('cliente.citas.create') }}">Solicitar nueva cita</a>
</x-app-layout>