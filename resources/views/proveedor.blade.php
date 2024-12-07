<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Crear Proveedor</h1>
        
        <form method="POST" action="{{ route('crearProveedor') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('nombre')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" id="direccion" name="direccion" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('direccion')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" id="telefono" name="telefono" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('telefono')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción (Opcional)</label>
                <textarea id="descripcion" name="descripcion" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="4"></textarea>
                @error('descripcion')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Crear
                </button>
            </div>
        </form>

        <!-- Tabla de Proveedores -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Proveedores Existentes</h2>
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nombre</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Dirección</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Correo</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Teléfono</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Descripción</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr class="border-b">
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $proveedor->id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $proveedor->nombre }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $proveedor->direccion }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $proveedor->email }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $proveedor->telefono }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $proveedor->descripcion }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">
                                <a href="{{ route('editProveedor', ['id' => $proveedor->id]) }}" class="text-indigo-600 hover:text-indigo-800">Editar</a>
                                <form method="POST" action="{{ route('borrarProveedor', ['id' => $proveedor->id]) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>