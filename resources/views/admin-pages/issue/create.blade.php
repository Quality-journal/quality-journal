<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create page') }}
        </h2>
    </x-slot>
    <div class="flex justify-between m-5">
            <p class="text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Create issue 
            </p>
            <span  class="pb-4">
                <a href="{{ route('selections.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Nazad</a>
            </span>
        </div>
<div class="leading-loose">
  <form class=" m-4 p-10 bg-white rounded shadow-xl" method='POST' action="{{route('issues.store')}}" enctype='multipart/form-data'>
      @csrf 
    
    <div class="mt-10" >
      <label class="block text-sm text-gray-00" for="title">Title</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text"  placeholder="" aria-label="title" value="{{old('title')}}">
    </div>
   
    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="slug">Slug</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="" aria-label="slug" value="{{old('slug')}}">
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="description">Description</label>
      <textarea class=" editor w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text"  placeholder="" aria-label="description" >{{old('description')}}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-00" for="order">Order</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="order" name="order" type="number" required="" placeholder="" aria-label="order" value="{{old('order')}}">
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="info">Info</label>
      <textarea class="editor w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="info" name="info" type="text" placeholder="" aria-label="info" >{{old('info')}}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="keywords">Keywords</label>
      <textarea class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="keywords" name="keywords" type="text" required="" placeholder="" aria-label="keywords" >{{old('keywords')}}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="content">Content</label>
      <textarea class="editor w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="content" name="content" type="text"  placeholder="" aria-label="content" >{{old('content')}}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="image">Image</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" required="" placeholder="" aria-label="image" value="{{old('image')}}">
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="date">Date</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="date" required="" placeholder="" aria-label="date" value="{{old('date')}}">
    </div>

    <input type="hidden" value="{{$selection_id}}" name="selection_id">
    
   
    <div class="mt-5">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
    </div>
  </form>
</div>


@include('components.ckeditor')

</x-app-layout>