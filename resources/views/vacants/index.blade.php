@extends('layouts.app')

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')

<h1 class="text-2xl text-center mt-10">Administrar Vacantes</h1>

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
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $vacant->active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $vacant->active ? 'Activa' : 'Inactiva' }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    <a
                        href=""
                        class="text-gray-500 hover:text-gray-600"
                    >   Candidatos</a>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                        <a href="#" class="text-teal-600 hover:text-teal-900 mr-5">Editar</a>
                        <a href="#" class="text-red-600 hover:text-red-900  mr-5">Eliminar</a>
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
