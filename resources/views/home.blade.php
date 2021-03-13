@extends('layouts.app')

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
    <div class="flex flex-col lg:flex-row shadow bg-white">
        <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:py-24">
            <p class="text-2xl text-gray-700 text-center">Dev<span class="font-bold">Jobs</span></p>
            <h1 class="mt-2 sm:mt-4 text-3xl font-semibold text-gray-700 leading-tight text-center">
                Encuentra un trabajo remoto o en tu país para
                <span class="text-teal-500 block">Desarrollador/a o Diseñador/a Web</span>
            </h1>

            @include('ui.searcher')
        </div>

        <div class="block lg:w-1/2">
            <img class="inset-0 h-full w-full object-cover object-center" src="{{ asset('img/4321.jpg') }}" alt="devJobs">
        </div>
    </div>

    <div class="my-5 bg-gray-100 shadow">
        <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-700 pt-5">
            Últimas vacantes añadidas
        </h1>
        <div class="w-full">
            <div class="h-1 mx-auto bg-teal-500 w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @include('ui.vacantslist', ['vacants' => $vacants])
    </div>
@endsection
