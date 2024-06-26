@extends('layouts.plantilla')

@section('titulo', 'Buscador de Centros de Reciclaje')

@section('contenido')
<div class="container mx-auto p-8 bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/img6.jpg') }}" alt="Buscar Centros de Reciclaje" class="rounded-lg shadow-lg mb-4 md:mb-0">
            </div>
            <div class="w-full md:w-1/2 md:pl-8">
                <h1 class="text-4xl font-bold text-green-600 mb-6">Buscador de Centros de Reciclaje</h1>
                <p class="text-gray-700 mb-4">
                    Encuentra los centros de reciclaje más cercanos a tu ubicación y obtén información detallada sobre los materiales que aceptan y los procedimientos de reciclaje.
                </p>
                <form class="mb-4">
                    <div class="mb-4">
                        <label for="ubicacion" class="block text-gray-700 mb-2">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-green-500" placeholder="Introduce tu ubicación">
                    </div>
                    <div class="mb-4">
                        <label for="material" class="block text-gray-700 mb-2">Material a reciclar:</label>
                        <input type="text" id="material" name="material" class="w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-green-500" placeholder="Introduce el material a reciclar">
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white p-2 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                        Buscar Centros
                    </button>
                </form>
                <p class="text-gray-700">
                    EcoRadar proporciona información detallada sobre los tipos de materiales no reciclables y la importancia de reciclarlos. Utiliza nuestro motor de búsqueda para encontrar centros de reciclaje cercanos, detalles sobre los procedimientos de reciclaje y recursos educativos para fomentar la sostenibilidad.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection