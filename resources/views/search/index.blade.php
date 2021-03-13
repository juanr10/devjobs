@extends('layouts.app')

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-700 pt-5">
            Resultados de la búsqueda:
        </h1>
        <div class="w-full">
            <div class="h-1 mx-auto bg-teal-500 w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @if($vacants->isNotEmpty())
            @include('ui.vacantslist', ['vacants' => $vacants])
        @else
            <p class="text-center mt-10 text-gray-700">No se han encontrado vacantes.</p>
        @endif
    </div>
@endsection
