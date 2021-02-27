@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
@endsection

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>

    <form class="max-w-lg mx-auto my-10" action="">
        @csrf

        <div class="mb-5">
            <label for="title" class="block text-gray-700 text-sm mb-2">Titulo vacante</label>
            <input id="title" type="text" class="p-3 bg-gray-100 rounded form-input w-full @error('title') border-red-500 border @enderror" name="title" value="{{ old('title') }}" placeholder="Titulo de la vacante">
        </div>

        <div class="mb-5">
            <label for="category" class="block text-gray-700 text-sm mb-2">Categoría</label>
            <select name="category" id="category" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="experience" class="block text-gray-700 text-sm mb-2">Experiencia</label>
            <select name="experience" id="experience" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($experiences as $experiency)
                    <option value={{ $experiency->id }}>{{ $experiency->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="location" class="block text-gray-700 text-sm mb-2">Ubicación</label>
            <select name="location" id="location" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($locations as $location)
                    <option value={{ $location->id }}>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="salary" class="block text-gray-700 text-sm mb-2">Salario</label>
            <select name="salary" id="salary" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($salaries as $salary)
                    <option value={{ $salary->id }}>{{ $salary->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="description" class="block text-gray-700 text-sm mb-2">Descripción del puesto:</label>
            <div class="editable block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100"></div>
            <input type="hidden" name="description" id="description">
        </div>

        <div class="mb-5">
            <label for="dropzone" class="block text-gray-700 text-sm mb-2">Imagen vacante:</label>
            <div id="dropzone" class="dropzone rounded bg-gray-100"></div>

            <span id="uploadError" class="mt-2"></span>

            <input type="hidden" name="image" id="image">
        </div>

        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline font-semibold">
            Publicar Vacante
        </button>
    </form>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js" integrity="sha512-KgeSi6qqjyihUcmxFn9Cwf8dehAB8FFZyl+2ijFEPyWu4ZM8ZOQ80c2so59rIdkkgsVsuTnlffjfgkiwDThewQ==" crossorigin="anonymous"></script>

    <script>
        Dropzone.autoDiscover = false;

        //Medium editor
        document.addEventListener('DOMContentLoaded', function() {
            const editor = new MediumEditor('.editable', {
                toolbar: {
                    buttons: ['bold', 'italic', 'underline', 'justifyLeft','justifyCenter', 'justifyRight', 'justifyFull', 'orderedList', 'unorderedList', 'h2', 'h3'],
                    static: true,
                    sticky: true,
                },
                placeholder: {
                    text: 'Información de la vacante'
                }
            });

            editor.subscribe('editableInput', function (eventObj, editable) {
                const content = editor.getContent();
                document.querySelector('#description').value = content;
            });

            const dropzone = new Dropzone('#dropzone', {
                url: "/vacants/uploadimage",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                dictDefaultMessage: 'Arrastra o click aquí para subir una imagen',
                acceptedFiles: '.png,.jpg,.jpeg,.gif,.bmp',
                addRemoveLinks: true,
                dictRemoveFile: 'Borrar archivo',
                maxFiles: 1,
                maxfilesexceeded: function(file) {
                    if(this.files[1] != null) {
                        this.removeFile(this.files[0]);
                        this.addFile(file);
                    }
                },
                removedfile: function(file, response) {
                    //Cleaning DOM
                    file.previewElement.parentNode.removeChild(file.previewElement);

                    params = {
                        image: file.serverName
                    }

                    axios.post('/vacants/deleteimage', params)
                        .then(response => console.log(response) );
                },
                success: function(file, response) {
                    //assigning the server response to the hidden input
                    document.querySelector('#image').value = response.success;

                    //adding file name from the server response
                    file.serverName = response.success;

                    //cleaning error message
                    document.querySelector('#uploadError').textContent = "";
                }
            });
        })
    </script>
@endsection
