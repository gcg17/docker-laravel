<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--Visualización de cita a asignar fecha, hora y duración estimada-->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-lg mx-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left">Marca</th>
                            <th class="py-3 px-4 text-left">Modelo</th>
                            <th class="py-3 px-4 text-left">Matrícula</th>
                            <th class="py-3 px-4 text-left">Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr class="border-t border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $cita->marca }}</td>
                                <td class="py-3 px-4">{{ $cita->modelo }}</td>
                                <td class="py-3 px-4">{{ $cita->matricula }}</td>
                                <td class="py-3 px-4">
                                    {{ $cita->user->name ?? 'N/A' }}
                                </td>
                            </tr>
                    </tbody>
               </table>
            </div>
            
            <!-- Formulario para asignar fecha, hora y duración estimada -->
            <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('taller.citas.update', $cita ) }}">
                        @csrf
                        @method('PUT')
                        <!-- Campo Fecha -->
                         <div class="mb-6">
                            <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="{{$cita->fecha ?? ''}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        
                        <!-- Campo Hora -->
                         <div class="mb-6">
                            <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                            <input type="time" name="hora" id="hora" value="{{$cita->hora ?? ''}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <!-- Campo Duración estimada -->
                         <div class="mb-6">
                            <label for="duracion_estimada" class="block text-sm font-medium text-gray-700">Duración estimada</label>
                            <input type="text" name="duracion_estimada" id="duracion_estimada" value="{{$cita->duracion_estimada ?? ''}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                         </div>
                        
                        <!-- Botones de acción -->
                        <div class="flex justify-between items-center mt-6">
                            <!-- Botón Cancelar -->
                            <a href="{{ route('taller.citas.index') }}" class="inline-flex items-center px-6 py-2 bg-gray-200 text-gray-700 font-semibold text-sm rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-200 ease-in-out">
                                Cancelar
                            </a>
                            
                            <!-- Crear cita -->
                            <button type="submit" class="inline-flex items-center px-6 py-2 bg-green-500 text-black font-semibold text-sm rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-200 ease-in-out">
                                Editar cita
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
