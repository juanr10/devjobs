@extends('layouts.app')

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-700 pt-5">
            Resultados de la búsqueda:
        </h1>
        <div class="w-full">
            <div class="h-1 mx-auto bg-teal-500 w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @if($vacants->isNotEmpty())
            @include('ui.vacantslist', ['vacants' => $vacants])
        @else
            <div class="bg-teal-100 border-l-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 rounded-lg shadow-lg mx-auto w-3/4 mt-10" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">Sin resultados.</p>
                        <p class="text-md">No se han encontrado ofertas.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
