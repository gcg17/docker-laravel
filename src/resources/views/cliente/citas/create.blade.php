<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('cliente.citas.create') }}">
                        @csrf
                        
                        <!-- Campo Marca -->
                        <div class="mb-6">
                            <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label>
                            <input type="text" name="marca" id="marca" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        
                        <!-- Campo Modelo -->
                        <div class="mb-6">
                            <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        
                        <!-- Campo Matrícula -->
                        <div class="mb-6">
                            <label for="matricula" class="block text-sm font-medium text-gray-700">Matrícula</label>
                            <input type="text" name="matricula" id="matricula" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        
                        <!-- Botones de acción -->
                        <div class="flex justify-between items-center mt-6">
                            <!-- Botón Cancelar -->
                            <a href="{{ route('cliente.citas.index') }}" class="inline-flex items-center px-6 py-2 bg-gray-200 text-gray-700 font-semibold text-sm rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-200 ease-in-out">
                                Cancelar
                            </a>
                            
                            <!-- Botón Solicitar cita -->
                            <button type="submit" class="inline-flex items-center px-6 py-2 bg-green-500 text-black font-semibold text-sm rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-200 ease-in-out">
                                Solicitar cita
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
