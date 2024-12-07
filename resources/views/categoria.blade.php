<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Categoría</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Crear Categoría</h1>

        <form method="POST" action="{{ route('crearCategoria') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <input type="text" placeholder="Nombre" name="nombre" required class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            <textarea placeholder="Descripción" name="descripcion" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            <input type="submit" value="Crear" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </form>

        <table class="min-w-full mt-6 bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Nombre</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Descripción</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $categoria->id }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $categoria->nombre }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $categoria->descripcion }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <a href="{{ route('editCategoria', ['id' => $categoria->id]) }}" class="text-indigo-600 hover:text-indigo-800">Editar</a>
                            <form method="POST" action="{{ route('borrarCategoria', ['id' => $categoria->id]) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 ml-4">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>


