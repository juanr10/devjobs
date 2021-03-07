@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />
@endsection

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center">{{ $vacant->title }}</h1>

    <div class="mt-10 mb-20 md:flex items-start">
        <div class="md:w-3/5">
            <p class="block text-gray-700 font-semibold my-2">
                Publicado <span class="font-normal">{{ $vacant->created_at->diffForHumans() }}</span>
                <span class="font-normal">por</span> {{ $vacant->user->name}}.
            </p>
            <p class="block text-gray-700 font-semibold my-2">
                Categoría: <span class="font-normal">{{ $vacant->category->name }}.</span>
            </p>
            <p class="block text-gray-700 font-semibold my-2">
                Salario: <span class="font-normal">{{ $vacant->salary->name }}.</span>
            </p>
            <p class="block text-gray-700 font-semibold my-2">
                Ubicación: <span class="font-normal">{{ $vacant->location->name }}.</span>
            </p>
            <p class="block text-gray-700 font-semibold my-2">
                Experiencia: <span class="font-normal">{{ $vacant->experience->name }}.</span>
            </p>

            <h2 class="text-2xl text-center mt-10 text-gray-700">Conocimientos y tecnologías</h2>
            @php
                $arraySkills = explode(",", $vacant->skills)
            @endphp

            <div class="flex flex-wrap justify-center">
                @foreach($arraySkills as $skill)
                    <p class="border border-gray-500 rounded py-2 px-8 text-gray-700 mx-2 mt-5">
                        {{ $skill }}
                    </p>
                @endforeach
            </div>

            <div class="flex flex-wrap justify-center mt-8">
                <div class="w-6/12 sm:w-4/12 px-4">
                    <a href="/storage/vacants/{{ $vacant->image }}" data-lightbox="image" data-title="{{ $vacant->title }}">
                        <img src="/storage/vacants/{{ $vacant->image }}" alt="vacant-image" class="shadow-lg rounded max-w-full h-auto align-middle border-none">
                    </a>
                </div>
            </div>

            <div class="description mt-6">
                {!! $vacant->description !!}
            </div>
        </div>

        <aside class="md:w-2/5 bg-teal-500 p-3 rounded m-3">
            @if($vacant->active)
                @include('ui.contact', ['vacant' => $vacant])
            @else
                <span class="flex flex-center bg-red-100 border border-yellow-500 text-yellow-700 w-full p-5 text-sm" role="alert">
                    <strong>Esta vacante no está disponible.</strong>
                </span>
            @endif
        </aside>
    </div>
@endsection
