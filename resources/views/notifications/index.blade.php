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
                    <p class="mb-4">Tienes un nuevo candidato en:
                        <span class="font-semibold">{{ $notification->data['vacant'] }}.</span>
                    </p>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-center mt-5">No tienes notificaciones.</p>
    @endif
@endsection
