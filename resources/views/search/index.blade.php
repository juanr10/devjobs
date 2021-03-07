@extends('layouts.app')

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Resultados de la búsqueda:
        </h1>
        @if($vacants->isNotEmpty())
            @include('ui.vacantslist', ['vacants' => $vacants])
        @else
            <p class="text-center mt-10 text-gray-700">No se han encontrado vacantes.</p>
        @endif
    </div>
@endsection
