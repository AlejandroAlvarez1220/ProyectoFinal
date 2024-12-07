<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Proveedor</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Editar Proveedor</h1>
        
        <form method="POST" action="{{ route('actualizarProveedor', ['id' => $proveedor->id]) }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $proveedor->nombre) }}" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('nombre')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $proveedor->direccion) }}" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('direccion')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email', $proveedor->email) }}" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $proveedor->telefono) }}" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('telefono')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción (Opcional)</label>
                <textarea id="descripcion" name="descripcion" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="4">{{ old('descripcion', $proveedor->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</body>
</html>

