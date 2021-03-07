<form class="max-w-lg mx-auto my-10" method="post" action={{ route('vacants.search') }} novalidate>
    @csrf

    <div class="flex flex-wrap mb-5">
        <label for="category" class="block text-gray-700 text-sm mb-2">Categoría</label>
        <select name="category" id="category" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
            <option disabled selected>-Selecciona-</option>
            @foreach($categories as $category)
                <option {{ old('category') == $category->id ? 'selected' : '' }} value={{ $category->id }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex flex-wrap mb-5">
        <label for="experience" class="block text-gray-700 text-sm mb-2">Experiencia</label>
        <select name="experience" id="experience" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
            <option disabled selected>-Selecciona-</option>
            @foreach($experiences as $experience)
                <option {{ old('experience') == $experience->id ? 'selected' : '' }}  value={{ $experience->id }}>{{ $experience->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex flex-wrap mb-5">
        <label for="location" class="block text-gray-700 text-sm mb-2">Ubicación</label>
        <select name="location" id="location" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
            <option disabled selected>-Selecciona-</option>
            @foreach($locations as $location)
                <option {{ old('location') == $location->id ? 'selected' : '' }} value={{ $location->id }}>{{ $location->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex flex-wrap mb-5">
        <label for="salary" class="block text-gray-700 text-sm mb-2">Salario</label>
        <select name="salary" id="salary" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100">
            <option disabled selected>-Selecciona-</option>
            @foreach($salaries as $salary)
                <option {{ old('salary') == $salary->id ? 'selected' : '' }} value={{ $salary->id }}>{{ $salary->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline font-semibold">
        Buscar
    </button>
</form>
