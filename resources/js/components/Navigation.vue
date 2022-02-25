<template>
  <div class="bg-newyellow">
    <div class="mx-auto sm:px-6 lg:px-8">
      <nav class="flex justify-between flex-wrap">
        <div class="flex items-center p-6 flex-shrink-0 text-gray-600 mr-6">
          <a class="flex flex-col space-y-1" :href="'/'">
            <span class="font-semibold text-md sm:text-xl tracking-tight"
              >Journal of Quality and System Engineering</span
            >
            <span class="text-sm sm:text-base">International journal</span>
          </a>
        </div>

        <div class="flex flex-col w-full lg:hidden px-3 pb-2">
          <button
            @click="toggleMobileMenu"
            class="flex justify-end px-3 py-2 text-gray-600 hover:text-gray-900"
          >
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Meni</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>

        <div
          class="
            w-full
            block
            flex-grow
            lg:flex lg:items-center lg:w-auto
            text-right
            mb-5
            pb-1
          "
          v-bind:class="{ hidden: !showMobileMenu }"
        >
          <div class="text-md lg:flex-grow">
            <a
              :href="'/about'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-gray-600
                hover:text-gray-800
                transition-all
                mr-4
              "
            >
              About the journal
            </a>

            <a
              :href="'/browse-issues'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-gray-600
            hover:text-gray-800
                transition-all
                mr-4
              "
            >
              Browse issues
            </a>
            <a
              :href="'/instructions-for-authors'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-gray-600
                hover:text-gray-800
                transition-all
                mr-4
              "
              >Instructions for authors</a
            >
            <a
              :href="'/submit-a-paper'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-gray-600
                hover:text-gray-800
                transition-all
                mr-4
              "
              >Submit a paper</a
            >
            <a
              :href="'/contact'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-gray-600
                hover:text-gray-800
                transition-all
                mr-4
              "
              >Contact</a
            >
            <a
              :href="'/search'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-gray-600
                hover:text-gray-800
                transition-all
                mr-4
              "
              >Search</a
            >
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      showMenu: false,
      showMobileMenu: false,
    };
  },
  methods: {
    toggleShow: function () {
      this.showMenu = !this.showMenu;
    },
    toggleMobileMenu: function () {
      this.showMobileMenu = !this.showMobileMenu;
    },
  },
};
</script>
