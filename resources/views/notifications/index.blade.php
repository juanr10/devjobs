@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Notificaciones</h1>

    @if($notifications->isNotEmpty())
        <ul class="max-w-md mx-auto mt-10">
            @foreach($notifications as $notification)
                <li class="p-5 border border-gray-400 mb-5">
                    <p class="mb-4">Tienes un nuevo candidato para:
                        <span class="font-semibold">{{ $notification->data['vacant']['title'] }}.</span>
                    </p>
                    <p class="mb-4">Se ha suscrito:
                        <span class="font-semibold">{{ $notification->created_at->diffForHumans() }}.</span>
                    </p>
                    <a href="{{ route('applicants.index', ['vacant' => $notification->data['vacant']['id'] ]) }}"
                        class="bg-teal-500 p-3 inline-block text-xs font-bold text-white">
                        Ver Candidatos
                    </a>
                </li>
            @endforeach
        </ul>
    @else
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 rounded-lg shadow-lg mx-auto w-3/4 mt-10" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
                <p class="font-bold">Sin notificaciones.</p>
                <p class="text-md">No tiene notificaciones pendientes.</p>
            </div>
        </div>
    </div>
    @endif
@endsection
