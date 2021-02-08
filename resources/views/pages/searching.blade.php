<x-guest-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-screen">  
        <div class="text-black bg-white flex items-center justify-center mt-5 "> 
             @forelse($results as $res)
             <div class="w-full sm:w-3/4 px-8">
                   <a href="{{explode('\\', get_class($res))[2]=='Article'?'/article/'.$res->slug :'/'.$res->slug}}"> <h1 class="text-2xl font-semibold mt-2 pb-4 text-dark">{{ $res->title }}</h1></a><hr>

                    <h3>Type:{{  explode('\\', get_class($res))[2]=='Article'?'Article':'Page'}}</h3><hr>

                    <h3>Title:{{$res->title}}</h3>

                   

                </div>
                @empty
                <div class="text-center text-3xl mt-10">No match!</div>
                
             @endforelse
        </div>

    </div>
</x-guest-layout>