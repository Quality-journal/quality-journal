<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-screen">
       

        <div class="text-black bg-white flex items-center justify-center mt-5 "> 
            <form action="{{route('search')}}">
                <div class="border rounded overflow-hidden flex">
           
                <input type="text" class="px-4 py-2 border rounded" placeholder="Search...">
                
                <button class="flex items-center justify-center px-4 border-l">
                <svg class="h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                </button>
            </form>
            </div>
        </div>

    </div>
</x-guest-layout>
