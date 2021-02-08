<template>

<div>
   <form action="#" method="POST">
        <div class="shadow overflow-hidden">
          <div class="px-4 py-5 sm:p-6 formdiv">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-12">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="col-span-12">
               <label for="name" class="leading-7 text-sm text-gray-600">Email address</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
               <div class="col-span-12">
                <label for="name" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 formdiv">
              <button type="submit" class="text-white bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">Send</button>
          </div>
        </div>
      </form>

</div>

</template>

<script>
    export default {

    };
</script>

<style scoped>



  .formdiv {
    background:#f5f5fa;
  }


</style>
