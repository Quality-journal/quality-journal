<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{'Edit issue'}}
        </h2>
    </x-slot>
    
<div class="leading-loose">
  <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method='POST' action="{{route('selections.update',['selection'=>$selection->id])}}">
      @csrf 
      @method('PUT')
    <p class="text-gray-800 text-xl font-semibold">Edit section</p>
    <div class="mt-10" >
      <label class="block text-sm text-gray-00" for="title">Title</label>
      <input class="editor w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="" aria-label="title" value="{{$selection->title}}">
    </div>
   
    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="slug">Slug</label>
      <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="" aria-label="slug" value="{{$selection->slug}}">
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-00" for="order">Order</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="order" name="order" type="number" required="" placeholder="" aria-label="order" value="{{$selection->order}}">
    </div>
    
   
    <div class="mt-4">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Edit</button>
    </div>
  </form>
</div>




</x-app-layout>