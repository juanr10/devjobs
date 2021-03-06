@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Candidatos para {{ $vacant->title }}: </h1>

    @if($vacant->applicants->isNotEmpty())
        <ul class="max-w-md mx-auto mt-10">
            @foreach($vacant->applicants as $applicant)
                <li class="p-5 border border-gray-400 mb-5">
                    <p class="mb-4">Nombre:
                        <span class="font-semibold">{{ $applicant->name }}.</span>
                    </p>
                    <p class="mb-4">Email:
                        <span class="font-semibold">{{ $applicant->email }}.</span>
                    </p>
                    <a class="bg-teal-500 p-3 inline-block text-xs font-bold text-white" href="/storage/cv/{{ $applicant->cv }}">Ver Curriculum</a>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-center mt-5">Esta vacante aún no tiene candidatos.</p>
    @endif
@endsection
