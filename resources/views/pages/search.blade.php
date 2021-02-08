<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-screen mb-6" >  
        <div class="text-black bg-white flex items-center justify-center mt-5 "> 
            <form id="form" action="{{route('searching')}}">
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
           <div class="w-full sm:w-3/4 px-8 mt-3 border-1 mx-auto text-center">
                 <a href="{{explode('\\', get_class($res))[2]=='Article'?'/article/'.$res->slug :'/'.$res->slug}}"> <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">{{ $res->title }}</h1></a><hr>

                  <h3>Type:{{  explode('\\', get_class($res))[2]=='Article'?'Article':'Page'}}</h3><hr>

                  <h3>Title:{{$res->title}}</h3><hr>

                 

            </div>
              @empty
              <div class="text-center text-3xl mt-10">No match!</div>
              
           @endforelse
           @endif   
        </div>
    </div>

    
       



</x-guest-layout>
<script>
   
</script>