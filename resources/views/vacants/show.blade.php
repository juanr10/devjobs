@extends('layouts.app')

@section('content')
    <h1 class="text-2xl text-center mt-10">{{ $vacant->title }}</h1>

    <div class="mt-10 mb-20 md:flex items-start">
        <div class="md:w-3/5">
            <p class="block text-gray-700 font-semibold my-2">
                Publicada: <span class="font-normal">{{ $vacant->created_at->diffForHumans() }}.</span>
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
                    <p class="border border-gray-500 rounded py-2 px-8 text-gray-700 my-6 mx-2 mt-5">
                        {{ $skill }}
                    </p>
                @endforeach
            </div>

            <div class="description mt-8 mb-5">
                {!! $vacant->description !!}
            </div>
        </div>

        <aside class="md:w-2/5">
            2
        </aside>
    </div>
@endsection
