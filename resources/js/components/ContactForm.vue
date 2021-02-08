<template>

<div>
   <form action="/sendmail" method="get">
     
        <div class="shadow overflow-hidden">
          <div class="px-4 py-5 sm:p-6 formdiv">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-12">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input v-model="names" type="text" id="name" name="name" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="col-span-12">
               <label for="name" class="leading-7 text-sm text-gray-600">Email address</label>
                <input v-model="email" type="email" id="email" name="email" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
               <div class="col-span-12">
                <label for="name" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea v-model="message" id="message" name="message" required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 formdiv">
              <button  type="submit" class="text-white bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">Send</button>
          </div>
        </div>
      </form>

</div>

</template>

<script>
    export default {
 data(){
      return{
          names:' ',
          email:' ',
          message:' '
      }
      
      },
      methods:{
        submitForm(event){
       // alert( event.target);
       // event.target.submit();
        }
      }
        
    };
</script>

<style scoped>



  .formdiv {
    background:#f5f5fa;
  }


</style>
