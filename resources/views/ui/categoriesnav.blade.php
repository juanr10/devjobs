@foreach ($categories as $category)
    <a href={{ route('categories.show', ['category' => $category]) }} class="text-white text-sm font-semibold p-3 hover:bg-teal-700{{ Request::is('categories/'.$category) ? 'bg-teal-500' : '' }}">{{ $category->name }}</a>
@endforeach
