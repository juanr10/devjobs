@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />
@endsection

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
<section class="text-gray-700 body-font p-4 bg-white shadow-md">
    @if(session('suscription'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 rounded-lg shadow-lg mx-auto w-3/4" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">¡Gracias por suscribirse!</p>
                    <p class="text-md">{{ session('suscription') }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="mx-auto flex px-5  md:flex-row flex-col items-center jobcard">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center">
            <figure class="visible">
                    <div class="pt-10 px-2 sm:px-6">
                        <span class="inline-block py-1 px-3 rounded-full bg-teal-500 text-white  text-sm font-bold tracking-widest mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                            {{ $vacant->category->name }}
                        </span>
                        <span class="inline-block py-1 px-3 rounded-full bg-teal-500 text-white  text-sm font-bold tracking-widest mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ $vacant->location->name }}
                        </span>
                        <span class="inline-block py-1 px-3 rounded-full bg-teal-500 text-white  text-sm font-bold tracking-widest mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $vacant->salary->name }}
                        </span>
                        <span class="inline-block py-1 px-3 rounded-full bg-teal-500 text-white  text-sm font-bold tracking-widest mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                            {{ $vacant->experience->name }}
                        </span>
                        <h1 class="title-font sm:text-4xl text-3xl font-medium">{{ $vacant->title }}</h1>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center mt-3">
                                <div class="h-12 w-12">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/testimonials/t_1.png" alt class="h-full w-full object-cover overflow-hidden rounded-full" />
                                </div>
                                <p class="font-bold ml-3">
                                    Publicado por <b>{{ $vacant->user->name}}.</b> <br />
                                    <span class="text-base font-light">{{ $vacant->created_at->diffForHumans() }}.</span>
                                </p>
                            </div>
                        </div>
                        <p class="text-base pb-8"> {!! $vacant->description !!}</p>

                        <h3 class="title-font sm:text-2xl text-xl mb-4 mt-5 font-medium text-center">Conocimientos y tecnologías</h3>
                        @php
                            $arraySkills = explode(",", $vacant->skills)
                        @endphp
                        <div class="flex flex-wrap justify-center">
                            @foreach($arraySkills as $skill)
                                <p class="border border-gray-500 rounded py-2 px-8 mx-2 mt-2 mb-10">
                                    {{ $skill }}
                                </p>
                            @endforeach
                        </div>

                        <div class="flex flex-wrap justify-center mt-1 mb-8">
                            <div class="w-6/12 sm:w-4/12 px-4">
                                <a href="/storage/vacants/{{ $vacant->image }}" data-lightbox="image" data-title="{{ $vacant->title }}">
                                    <img src="/storage/vacants/{{ $vacant->image }}" alt="vacant-image" class="shadow-lg rounded max-w-full h-auto align-middle border-none">
                                </a>
                            </div>
                        </div>
                    </div>
            </figure>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 bg-teal-500 p-3 rounded-lg shadow-lg">
            @if($vacant->active)
                @include('ui.contact', ['vacant' => $vacant])
            @else
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 rounded-lg shadow-lg mx-auto w-96" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="font-bold">Esta oferta ya no está disponible.</p>
                            <p class="text-md">Ha sido desactivada por el reclutador.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
