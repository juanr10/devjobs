@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
@endsection

@section('navigation')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Editar vacante: <b>{{ $vacant->title }}</b></h1>
    <div class="w-full">
        <div class="h-1 mx-auto bg-teal-500 w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <form class="max-w-lg mx-auto my-10" method="post" action={{ route('vacants.update', ['vacant' => $vacant]) }} novalidate>
        @csrf
        @method('PUT')

        <div class="flex flex-wrap mb-5">
            <label for="title" class="block text-gray-700 text-sm mb-2">Titulo vacante</label>
            <input id="title" type="text" class="p-3 bg-gray-100 rounded form-input w-full @error('title') border-red-500 border @enderror" name="title" value="{{ $vacant->title }}" placeholder="Titulo de la vacante">

            @error('title')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="category" class="block text-gray-700 text-sm mb-2">Categoría</label>
            <select name="category" id="category" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($categories as $category)
                    <option {{ $vacant->category_id == $category->id ? 'selected' : '' }} value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>

            @error('category')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="experience" class="block text-gray-700 text-sm mb-2">Experiencia</label>
            <select name="experience" id="experience" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($experiences as $experience)
                    <option {{ $vacant->experience_id == $experience->id ? 'selected' : '' }}  value={{ $experience->id }}>{{ $experience->name }}</option>
                @endforeach
            </select>

            @error('experience')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="location" class="block text-gray-700 text-sm mb-2">Ubicación</label>
            <select name="location" id="location" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($locations as $location)
                    <option {{ $vacant->location_id == $location->id ? 'selected' : '' }} value={{ $location->id }}>{{ $location->name }}</option>
                @endforeach
            </select>

            @error('location')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="salary" class="block text-gray-700 text-sm mb-2">Salario</label>
            <select name="salary" id="salary" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>-Selecciona-</option>
                @foreach($salaries as $salary)
                    <option {{ $vacant->salary_id == $salary->id ? 'selected' : '' }} value={{ $salary->id }}>{{ $salary->name }}</option>
                @endforeach
            </select>

            @error('salary')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="description" class="block text-gray-700 text-sm mb-2">Descripción del puesto:</label>
            <div class="editable block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100"></div>
            <input type="hidden" name="description" id="description" value="{{ $vacant->description}}">

            @error('description')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="skills" class="block text-gray-700 text-sm mb-5">Habilidades y conocimientos: <span class="text-xs">(Elige al menos 3)</span></label>

            @php
                $skills = ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS', 'React Hooks', 'Redux', 'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM', 'Sequelize', 'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby on Rails']
            @endphp
            <skills-list :oldskills="{{ json_encode($vacant->skills) }}" :skills="{{ json_encode($skills) }}"></skills-list>
            <br>

            @error('skills')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <label for="dropzone" class="block text-gray-700 text-sm mb-2">Imagen vacante:</label>

            <div id="dropzone" class="dropzone rounded bg-gray-100 w-full mt-2"></div>
            <span id="uploadError" class="mt-2"></span>
            <input type="hidden" name="image" id="image" value={{ $vacant->image }}>

            @error('image')
                <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="w-full mt-6 px-4 py-2 text-base font-semibold text-center text-white transform transition hover:scale-105 duration-300 ease-in-out bg-teal-500 shadow-md hover:bg-teal-600 focus:outline-none focus:ring-2">
            Editar Vacante
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
                    buttons: ['bold', 'italic', 'underline', 'justifyLeft','justifyCenter', 'justifyRight', 'justifyFull', 'orderedlist', 'unorderedlist', 'h2', 'h3'],
                    static: true,
                    sticky: true,
                },
                placeholder: {
                    text: 'Información de la vacante'
                }
            });

            //Fills the hidden input with the contents of the editor
            editor.subscribe('editableInput', function (eventObj, editable) {
                const content = editor.getContent();
                document.querySelector('#description').value = content;
            });

            //Fill the editor with the content of the hidden input
            editor.setContent(document.querySelector('#description').value);

        //DropZone
            const dropzone = new Dropzone('#dropzone', {
                url: "/vacants/uploadimage",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                init: function () {
                    if(document.querySelector('#image').value.trim()) {
                        let uploadedImage = {};
                        uploadedImage.size = 1234;
                        uploadedImage.name = document.querySelector('#image').value;
                        uploadedImage.serverName = document.querySelector('#image').value

                        this.options.addedfile.call(this, uploadedImage);
                        this.options.thumbnail.call(this, uploadedImage, `/storage/vacants/${uploadedImage.name}`);

                        uploadedImage.previewElement.classList.add('dz-processing');
                        uploadedImage.previewElement.classList.add('dz-success');
                        uploadedImage.previewElement.classList.add('dz-complete');
                    }
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
