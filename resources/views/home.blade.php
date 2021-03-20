@extends('layouts.app')

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('heroSection')
    <div class="pt-12 pb-16 shadow bg-teal-300">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose text-xl lg:text-2xl w-full">¿Es desarrollador o diseñador?</p>
            <h1 class="my-4 text-4xl lg:text-5xl font-bold leading-tight">
                Encuentre trabajo remoto o en su país en tiempo récord.
            </h1>
            <p class="leading-normal text-xl lg:text-2xl tracking-loose mb-8 w-full">
                Busque ofertas y suscríbase rápidamente.
            </p>

            @include('ui.searcher')
        </div>
        <!--Right Col-->
        <div class="w-full md:w-2/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{ asset("img/hero.png") }}" />
        </div>
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
