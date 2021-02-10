<template>

    <div class="bg-blue-700">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between flex-wrap p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <a :href="'/'"><span class="font-semibold text-xl tracking-tight">Journal of Quality Engineering</span></a>
                </div>
                <div class="block lg:hidden">
                    <button @click='toggleMobileMenu' class="flex items-center px-3 py-2 text-white hover:text-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto" v-bind:class="{ 'hidden': !showMobileMenu}">
                    <div class="text-lg lg:flex-grow">
                         <a :href="'/search'" class="block mt-4 lg:inline-block md:mt-0 text-white hover:text-yellow-500 mr-4">
                            Search
                        </a>
                        <a :href="'/browse-issues'" class="block mt-4 lg:inline-block md:mt-0 text-white hover:text-yellow-500 mr-4">
                            Browse issues
                        </a>
                        <a :href="'/instructions-for-authors'"  class="block mt-4 lg:inline-block md:mt-0 text-white hover:text-yellow-500 mr-4">
                            Instructions for authors
                        </a>
                        <a :href="'/about'" class="block mt-4 lg:inline-block md:mt-0 text-white hover:text-yellow-500 mr-4">
                            About the journal
                        </a>
                        <a :href="'/submit-a-paper'"  class="block mt-4 lg:inline-block md:mt-0 text-white hover:text-yellow-500 mr-4">
                            Submit a paper
                        </a>
                        <a :href="'/contact'" class="block mt-4 lg:inline-block md:mt-0 text-white hover:text-yellow-500 mr-4">
                            Contact
                        </a>
                    </div>
                </div>
                <div class="block lg:flex lg:items-center lg:w-auto">
                    <div class="relative inline-block text-left">

                    </div>
                </div>
            </nav>
        </div>
    </div>

</template>

<script>
    export default {
        data: function() {
            return {
                showMenu: false,
                showMobileMenu: false
            }
        },
        methods: {
            toggleShow: function() {
                this.showMenu = !this.showMenu;
            },
            toggleMobileMenu: function() {
                this.showMobileMenu = !this.showMobileMenu;
            }
        },

    }
</script>
