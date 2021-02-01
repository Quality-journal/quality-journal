<template>

<div>
   <form action="#" method="POST">
        <div  class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5  sm:p-6 formdiv">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-12">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Firstname and lastname</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-12">
                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text"  name="email_address" id="email_address" autocomplete="email" class="w-full md:w-1/2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
               <div class="col-span-12">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea rows="10" name="message" id="message" autocomplete="message" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>  
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 formdiv">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Send
            </button>
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