@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <div class="flex flex-col lg:flex-row shadow bg-white">
        <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:py-24">
            <p class="text-2xl text-gray-700">
                dev<span class="font-semibold">Jobs</span>
            </p>

            <h1 class="mt-2 sm:mt-4 text-3xl font-semibold text-gray-700 leading-tight">
                Encuentra un trabajo remoto o en tu país
                <span class="text-teal-500 block">Para Desarrolladores / Diseñadores Web</span>
            </h1>
        </div>

        <div class="block lg:w-1/2">
            <img class="inset-0 h-full w-full object-cover object-center" src="{{ asset('img/4321.jpg') }}" alt="devJobs">
        </div>
    </div>

    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Nuevas <span class="font-semibold">vacantes disponibles:</span>
        </h1>

        <ul class="mt-10 grid grid-cols-10 md:grid-cols-2 gap-8">
            @foreach($vacants as $vacant)
                <li class="p-10 border border-gray-300 bg-white shadow">
                    <h2 class="text-xl font-semibold text-teal-500">{{ $vacant->title }}</h2>
                    <p class="block text-gray-700 font-normal my-2">
                        {{ $vacant->category->name }}
                    </p>
                    <p class="block text-gray-700 font-normal my-2">
                        Ubicación: <span class="font-semibold">{{ $vacant->location->name }}.</span>
                    </p>
                    <p class="block text-gray-700 font-normal my-2">
                        Experiencia: <span class="font-semibold">{{ $vacant->experience->name }}.</span>
                    </p>
                    <a href="{{ route('vacants.show', ['vacant' => $vacant->id]) }}"
                        class="bg-teal-500 mt-2 p-3 inline-block text-xs font-bold text-white">
                        Ver más detalles
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
