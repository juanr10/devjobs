<h2 class="text-xl mt-4 text-white font-black text-center uppercase">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="inline mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
    Suscribirse
</h2>
<p class="mb-4 text-md text-white text-center">El reclutador se pondrá en contacto con usted en breve.</p>

<form action="{{ route('applicants.store') }}" method="POST" class="p-3" enctype="multipart/form-data" novalidate >
    @csrf

    <div class="flex flex-col">
        <div class="flex relative">
            <span
                class="inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" width="15" height="15">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
            <input type="text" name="name" value="{{ old('name') }}"
                class="flex-1 appearance-none border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-600 shadow-sm text-base focus:ring focus:border-gray-500"
                placeholder="Nombre" />
        </div>
        @error('name')
        <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"
            role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="flex flex-col pt-4">
        <div class="flex relative ">
            <span
                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                    </path>
                </svg>
            </span>
            <input type="email" name="email" value="{{ old('email') }}"
                class="flex-1 appearance-none border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-600 shadow-sm text-base focus:ring focus:border-gray-500"
                placeholder="Email" />
        </div>
        @error('email')
        <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"
            role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="flex w-full items-center justify-center bg-grey-lighter my-4">
        <label class="w-50 flex flex-col items-center px-3 py-2 bg-white text-blue rounded-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-blue hover:bg-gray-200">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
            </svg>
            <span class="mt-2 text-sm leading-normal text-center">Adjuntar CV (PDF)</span>
            <input type='file' class="hidden" name="cv" accept="application/pdf"/>
        </label>

        @error('cv')
            <span class="bg-red-100 border border-red-500 text-red-700 p-4 w-75 mt-5 text-sm ml-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <input type="hidden" name="vacant_id" value={{ $vacant->id }}>

    <button type="submit" class="w-full px-4 py-2 text-base font-semibold text-center text-white transform transition hover:scale-105 duration-300 ease-in-out bg-teal-600 shadow-md hover:bg-teal-700 focus:outline-none focus:ring-2">
        Contactar
    </button>
</form>

