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
        <p class="text-center mt-5">No tienes notificaciones.</p>
    @endif
@endsection
