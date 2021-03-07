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

        @error('category')
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
                <option {{ old('location') == $location->id ? 'selected' : '' }} value={{ $location->id }}>{{ $location->name }}</option>
            @endforeach
        </select>

        @error('location')
            <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline font-semibold">
        Buscar
    </button>
</form>
