<h2 class="text-l my-5 text-white font-semibold text-center uppercase">Contacta al Reclutador</h2>

<form action="" novalidate class="p-3">
    <div class="flex flex-wrap mb-5">
        <label for="name" class="block text-white text-sm font-semibold mb-4">Nombre:</label>
        <input id="name" type="text" class="block p-3 bg-gray-100 rounded form-input w-full @error('name') border border-red-500 @enderror"
            name="name" placeholder="Introduce tu nombre" value={{ old('name') }}>

        @error('name')
            <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="flex flex-wrap mb-5">
        <label for="email" class="block text-white text-sm font-semibold mb-4">Email:</label>
        <input id="email" type="text" class="block p-3 bg-gray-100 rounded form-input w-full @error('email') border border-red-500 @enderror"
            name="email" placeholder="Introduce tu email" value={{ old('email') }}>

        @error('email')
            <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="flex flex-wrap mb-5">
        <label for="cv" class="block text-white text-sm font-semibold mb-2">Curriculum (PDF):</label>
        <input id="cv" type="file" class="block p-3 rounded form-input w-full @error('cv') border border-red-500 @enderror"
            name="cv" accept="application/pdf">

        @error('cv')
            <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <input type="hidden" name="vacant_id" value={{ $vacant->id }}>

    <button type="submit" class="bg-teal-700 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline font-semibold">
        Contactar
    </button>
</form>

