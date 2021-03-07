@extends('layouts.app')

@section('navigation')
    @include('ui.categoriesnav')
@endsection

@section('content')
    <div class="bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Vacantes disponibles para: <span class="font-semibold">{{ $category->name }}.</span>
        </h1>

        @include('ui.vacantslist', ['vacants' => $vacants])
    </div>
@endsection
