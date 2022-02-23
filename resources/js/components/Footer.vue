<template>
  <div class="bg-blue-600 footer">
    <div class="mx-auto sm:px-6 text-white h-auto">
      <div class="flex flex-wrap py-4 px-4">
        <div class="w-full sm:w-1/4 px-2">
          <!-- <a :href="'/'"
            ><span class="font-semibold text-xl tracking-tight px-6 md:px-0"
              >Science of Maintenance</span
            ></a
          > -->
          <div class="m-auto sm:m-0 w-1/2 p-4 border-2 border-white">
            <img class="w-full text-center" src="/images/iipp.gif" alt="iipp" />
            <p class="mt-3 text-center">publishing</p>
          </div>
        </div>
        <div class="w-full sm:w-2/4 px-8 mt-4 sm:mt-0">
          <p class="font-bold">Journal of Quality Engineering</p>
          <ul class="list-style-none mt-2">
            <li><a :href="'/about'">About the journal</a></li>
            <li><a :href="'/browse-issues'">Browse issues</a></li>
            <li>
              <a :href="'/instructions-for-authors'"
                >Instructions for authors</a
              >
            </li>
            <li><a :href="'/submit-a-paper'">Submit a paper</a></li>
            <li><a :href="'/contact'">Contact</a></li>
          </ul>
        </div>
        <div class="w-full sm:w-1/4 px-8">
          <p class="font-bold">Contact</p>
          <p class="mt-2">
            Editorial office<br />Kraljice Marije 16,<br />11000 Belgrade,
            Serbia<br /><a href="mailto:office@q-sci.rs">office@q-sci.rs</a>
          </p>
        </div>
      </div>
    </div>
    <hr />
    <div class="mx-auto sm:px-6 lg:px-8 text-white h-auto">
      <div class="flex flex-wrap py-4 px-4">
        <div class="w-full sm:w-1/2">
          <p>&copy; 2022 Journal of Quality Engineering</p>
        </div>
        <div class="w-full sm:w-1/2">
          <p class="md:float-right">
            Created by
            <a
              class="hover:text-yellow-600"
              href="https://projectland.rs"
              target="blank"
              >Projectland</a
            >
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
