<div class="w-3/4 sm:w-1/4 px-4 bg-gray-200 py-2 mt-3">
    <p class="text-2xl mb-5 text-dark border-b border-solid border-black text-center">Selections</p>
    @foreach($selections as $selection)
        <a href="/selection/{{ $selection->slug }}" class="ml-5 p-2 hover:text-yellow-500 font-bold">{{ $selection->title }}</a>
    @endforeach
</div>
