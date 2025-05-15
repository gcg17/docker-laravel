<x-app-layout>
    <x-slot name="header">
        Mis citas
    </x-slot>

    <div class="container mx-auto py-4">
        <!-- Verifica si el usuario tiene citas -->
        @if ($citas->isEmpty())
            <p class="text-center text-gray-600 my-6">No tienes citas pendientes</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-lg mx-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left">Marca</th>
                            <th class="py-3 px-4 text-left">Modelo</th>
                            <th class="py-3 px-4 text-left">Matrícula</th>
                            <th class="py-3 px-4 text-left">Fecha</th>
                            <th class="py-3 px-4 text-left">Hora</th>
                            <th class="py-3 px-4 text-left">Duración estimada</th>
                            <th class="py-3 px-4 text-left">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                            <tr class="border-t border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $cita->marca }}</td>
                                <td class="py-3 px-4">{{ $cita->modelo }}</td>
                                <td class="py-3 px-4">{{ $cita->matricula }}</td>
                                <td class="py-3 px-4">{{ $cita->fecha ?? 'Sin asignar' }}</td>
                                <td class="py-3 px-4">{{ $cita->hora ?? 'Sin asignar' }}</td>
                                <td class="py-3 px-4">{{ $cita->duracion_estimada ?? 'Sin estimar' }}</td>
                                <td class="py-3 px-4">
                                    @if(!isset($cita->hora) || !isset($cita->fecha))
                                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-semibold">Pendiente de asignar</span>
                                    @else
                                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Asignada</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
