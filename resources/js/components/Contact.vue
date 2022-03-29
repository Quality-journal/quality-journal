<template>
  <div class="mx-auto sm:px-6 lg:px-8 bg-white">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-6">
      <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-blue-600">
        Contact
      </h1>
      <hr />
      <div class="flex flex-wrap py-4">
        <div class="w-full sm:w-2/3 mb-5">
          <contact-form-component></contact-form-component>
        </div>
        <div class="w-full sm:w-1/3 px-8 text-lg">
          <p class="text-xl font-semibold leading-6 mt-4 text-blue-600">
            Editor in chief:
          </p>
          <p class="mt-1">
            Miloš Vasić<br />
            E:
            <a
              class="text-blue-600 hover:text-blue-800"
              :href="'mailto: mvasic@q-sci.rs'"
              >mvasic@q-sci.rs</a
            >
          </p>
          <p class="text-xl font-semibold leading-6 mt-4 text-blue-600">
            Editorial office:
          </p>
          <p class="mt-1">
            Kraljice Marije 16,<br />11000 Belgrade, Serbia<br />
            E:
            <a
              class="text-blue-600 hover:text-blue-800"
              :href="'mailto: office@m-sci.rs'"
              >office@m-sci.rs</a
            >
          </p>
          <p class="mt-4 text-xl font-semibold leading-6 text-blue-600">
            Publisher:
          </p>
          <p class="mt-1">
            <strong>Institute for research</strong><br />
            <strong>and design in industry</strong><br />
            E:
            <a
              class="text-blue-600 hover:text-blue-800"
              :href="'mailto: office@iipp.rs'"
              >office@iipp.rs</a
            >
          </p>
          <p class="mt-4 text-xl font-semibold leading-6 text-blue-600">
            Co-Publisher:
          </p>
          <p class="mt-1">
            <strong>Serbian Maintenance Society</strong><br />
            E:
            <a
              class="text-blue-600 hover:text-blue-800"
              :href="'mailto: office@dots.rs'"
              >office@dots.rs</a
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
