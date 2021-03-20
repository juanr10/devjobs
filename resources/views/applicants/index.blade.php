@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <section>
        <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-700 pt-5">
            Candidatos para {{ $vacant->title }}:
        </h1>
        <div class="w-full">
            <div class="h-1 mx-auto bg-teal-500 w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="container mx-auto flex flex-wrap p-5">
            @if($vacant->applicants->isNotEmpty())
                @foreach($vacant->applicants as $applicant)
                    <div class="lg:w-1/3 w-full p-3 flex flex-col">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                            <div class="w-full font-bold text-xl px-6 text-teal-600 pt-3">
                                {{ $applicant->name  }}.
                            </div>
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current inline-block">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                {{ $vacant->created_at->diffForHumans() }}
                            </p>
                            <p class="text-gray-800 text-base px-6 mb-3">
                                Email: <span class="font-semibold">{{ $applicant->email }}.</span>
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow">
                            <div class="flex items-center justify-center">
                                <a href="/storage/cv/{{ $applicant->cv }}" class="mx-auto lg:mx-0 bg-teal-500 text-white font-bold my-4 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    Ver Curriculum
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="bg-teal-100 border-l-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-lg rounded-lg mx-auto w-96" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="font-bold">Esta vacante aún no tiene candidatos.</p>
                            <p class="text-md">Le informaremos cuando exista algún cambio.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
