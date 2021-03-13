<section>
    <div class="container mx-auto flex flex-wrap p-5">
        @foreach($vacants as $vacant)
            <div class="w-full md:w-1/2 p-3 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="w-full font-bold text-xl px-6 text-teal-600 pt-3">
                        {{ $vacant->title }}.
                    </div>
                    <p class="text-gray-800 px-6 mb-1 italic text-md">
                        {{ $vacant->category->name }}
                    </p>
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current inline-block">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        {{ $vacant->created_at->diffForHumans() }}
                    </p>
                    <p class="text-gray-800 text-base px-6 mb-3">
                        Ubicación: <span class="font-semibold">{{ $vacant->location->name }}.</span>
                    </p>
                    <p class="text-gray-800 text-base px-6 mb-3">
                        Salario: <span class="font-semibold">{{ $vacant->salary->name }}.</span>
                    </p>
                    <p class="text-gray-800 text-base px-6 mb-3">
                        Experiencia: <span class="font-semibold">{{ $vacant->experience->name }}.</span>
                    </p>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow">
                    <div class="flex items-center justify-center">
                        <a href="{{ route('vacants.show', ['vacant' => $vacant->id]) }}" class="mx-auto lg:mx-0 bg-teal-500 text-white font-bold my-4 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Ver más detalles
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
