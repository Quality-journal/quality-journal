<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Edit page' }}
        </h2>
    </x-slot>
    <div class="flex justify-between m-5">
            <p class="text-xl pb-4">
                <i class="fas fa-edit mr-2"></i> Edit issue 
            </p>
            <span  class="pb-4">
                <a href="{{ route('selections.index') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-arrow-left"></i>  Nazad</a>
            </span>
        </div>
<div class="leading-loose">
  <form class="m-4 p-10 bg-white rounded shadow-xl" method='POST' action="{{route('issues.update',['issue'=>$issue->id])}}" enctype='multipart/form-data'>
      @csrf 
      @method('PUT')
    
    <div class="mt-10" >
      <label class="block text-sm text-gray-00" for="title">Title</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="" aria-label="title" value="{{$issue->title}}">
    </div>
   
    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="slug">Slug</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="" aria-label="slug" value="{{$issue->slug}}">
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="description">Description</label>
      <textarea class=" editor w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text" required="" placeholder="" aria-label="description" >{!!$issue->description!!}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-00" for="order">Order</label>
      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="order" name="order" type="number" required="" placeholder="" aria-label="order" value="{{$issue->order}}">
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="info">Info</label>
      <textarea class="editor w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="info" name="info" type="text" required="" placeholder="" aria-label="info" >{!!$issue->info!!}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="keywords">Keywords</label>
      <textarea class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="keywords" name="keywords" type="text" required="" placeholder="" aria-label="keywords" >{!!$issue->keywords!!}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="content">Content</label>
      <textarea class="editor w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="content" name="content" type="text" required="" placeholder="" aria-label="content" >{!!$issue->content!!}</textarea>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="image">Image</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file"  placeholder="" aria-label="image">
      <span class="font-italic text-xs md:text-sm mx-2" id="old_document">{{ $issue->image }}</span>
    </div>

    <div class="mt-5">
      <label class="block text-sm text-gray-600" for="date">Date</label>
      <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="date" required="" placeholder="" aria-label="date" value="{{$issue->date}}">
    </div>
    <input type="hidden" value="{{$issue->selection_id}}" name="selection_id">
    
   
    <div class="mt-5">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Edit</button>
    </div>
  </form>
</div>


@include('components.ckeditor')

</x-app-layout>