<ul class="mt-10 grid grid-cols-10 md:grid-cols-2 gap-8">
    @foreach($vacants as $vacant)
        <li class="p-10 border border-gray-300 bg-white shadow">
            <h2 class="text-xl font-semibold text-teal-500">{{ $vacant->title }}</h2>
            <p class="block text-gray-700 font-normal my-2">
                {{ $vacant->category->name }}
            </p>
            <p class="block text-gray-700 font-normal my-2">
                Ubicación: <span class="font-semibold">{{ $vacant->location->name }}.</span>
            </p>
            <p class="block text-gray-700 font-normal my-2">
                Experiencia: <span class="font-semibold">{{ $vacant->experience->name }}.</span>
            </p>
            <a href="{{ route('vacants.show', ['vacant' => $vacant->id]) }}"
                class="bg-teal-500 mt-2 p-3 inline-block text-xs font-bold text-white">
                Ver más detalles
            </a>
        </li>
    @endforeach
</ul>
