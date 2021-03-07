@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Vacantes disponibles para <span class="font-semibold">{{ $category->name }}</span>
        </h1>

        @include('ui.vacantslist', ['vacants' => $vacants])
    </div>
@endsection
