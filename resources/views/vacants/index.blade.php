@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')

<h1 class="text-2xl text-center mt-10">Administrar Vacantes</h1>
<div class="w-full">
    <div class="h-1 mx-auto bg-teal-500 w-64 opacity-25 my-0 py-0 rounded-t"></div>
</div>

@if($vacants->isNotEmpty())
    <div class="flex flex-col mt-10">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
            <thead class="bg-gray-100 ">
                <tr>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Titulo Vacante
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Estado
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Candidatos
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Acciones
                </th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($vacants as $vacant)
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">

                    <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900"> {{ $vacant->title }}</div>
                        <div class="text-sm leading-5 text-gray-500">Categoria: {{ $vacant->category->name }} </div>
                    </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <status status="{{ $vacant->active }}" vacant-id="{{ $vacant->id }}"></status>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    <a
                        href={{ route('applicants.index', ['vacant' => $vacant]) }}
                        class="text-gray-500 hover:text-gray-600"
                    >   {{ $vacant->applicants->count() }} Candidatos</a>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                        <a href={{ route('vacants.edit', ['vacant' => $vacant]) }} class="text-teal-600 hover:text-teal-900 mr-5">Editar</a>
                        <delete-vacant vacant-id="{{ $vacant->id }}"></delete-vacant>
                        <a href={{ route('vacants.show', ['vacant' => $vacant]) }} class="text-blue-600 hover:text-blue-900">Ver</a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    {{ $vacants->links() }}
@else
  <p class="text-center mt-10 text-gray-700">Aún no tienes vacantes</p>
@endif

@endsection
