<x-guest-layout>

    <x-slot name="title">{{ 'Search articles, issues, volumes' }}</x-slot>
    <x-slot name="description">{{ 'Search the site, find articles, issues, volumes, journal of quality engineering' }}</x-slot>
    <x-slot name="keywords">{{ 'search, find, articles, issues, volumes' }}</x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-screen pb-6 bg-white" >
        <div class="text-black bg-white flex items-center justify-center pt-5 ">
            <form id="form" action="{{route('searching')}}" autocomplete="off">
                <div class="border rounded overflow-hidden flex">

                <input id="input" type="text" name="search" class="px-4 py-2 border rounded" placeholder="Search...">

                <button id="button" class="flex items-center justify-center px-4 border-l">
                <svg class="h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                </button>
                </div>
            </form>
        </div>
        <div class="text-black bg-white flex-col items-center justify-center mt-5 ">

           @if(isset($results))
           @forelse($results as $res)
           <div class="w-full sm:w-3/4 px-8 mt-3 border-2 mx-auto text-center border-solid border-gray-300 hover:border-yellow-700 hover:text-yellow-700">
                 <a href="{{$res->url()}}"> <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">{{ $res->title }}</h1><hr></a>

                  <h3>Type : {{  explode('\\', get_class($res))[2] }}</h3><hr>

                  <h3 class="mb-3">Title : {{$res->title}}</h3>

            </div>
              @empty
              <div class="text-center text-3xl mt-10">No match!</div>

           @endforelse
           @endif
        </div>
    </div>

</x-guest-layout>
