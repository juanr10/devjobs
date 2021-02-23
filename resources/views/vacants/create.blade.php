@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav');
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>

    <form class="max-w-lg mx-auto my-10" action="">
        <div class="mb-5">
            <label for="title" class="block text-gray-700 text-sm mb-2">Titulo Vacante</label>
            <input id="title" type="text" class="p-3 bg-gray-100 rounded form-input w-full @error('title') border-red-500 border @enderror" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-5">
            <label for="category" class="block text-gray-700 text-sm mb-2">Categoría</label>
            <select name="category" id="category" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="experience" class="block text-gray-700 text-sm mb-2">Experiencia</label>
            <select name="experience" id="experience" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($experiences as $experiency)
                    <option value={{ $experiency->id }}>{{ $experiency->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="location" class="block text-gray-700 text-sm mb-2">Ubicación</label>
            <select name="location" id="location" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($locations as $location)
                    <option value={{ $location->id }}>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline font-semibold">
            Publicar Vacante
        </button>
    </form>
@endsection
