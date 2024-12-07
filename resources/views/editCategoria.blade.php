<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Categoría</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Editar Categoría</h1>
        
        <form method="POST" action="{{ route('actualizarCategoria', ['id' => $categoria->id]) }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PATCH')
            
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) }}" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('nombre')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="4">{{ old('descripcion', $categoria->descripcion) }}</textarea>
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

