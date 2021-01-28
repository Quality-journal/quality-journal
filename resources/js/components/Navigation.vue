<template>

    <div class="bg-blue-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between flex-wrap p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                    <a :href="'/'"><span class="font-semibold text-xl tracking-tight">Quality Journal</span></a>
                </div>
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Meni</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow text-lg">
                        <a :href="'#'" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-600 mr-4">
                            Članci
                        </a>
                        <a :href="'/manual'" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-600 mr-4">
                            Uputstvo za autore
                        </a>
                        <a :href="'/about'" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-600 mr-4">
                            O Časopisu
                        </a>
                        <a :href="'/contact'" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-600 mr-4">
                            Kontakt
                        </a>
                    </div>
                </div>

                <div class="block lg:flex lg:items-center lg:w-auto">
                    <div class="relative inline-block text-left">
                        <div>
                            <button @click='toggleShow' class="inline-flex justify-center w-full text-sm font-medium text-gray-700" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                <img v-if="locale == 'sr'" class="h-4" src="/images/sr.png" alt="Srpski">
                                <img v-if="locale == 'en'" class="h-4" src="/images/en.png" alt="English">

                                <!-- Heroicon name: chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div v-if='showMenu' class="origin-top-right absolute right-0 mt-2 w-12 bg-white">
                            <div v-if="locale != 'en'" class="py-2 px-3" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a :href="'/lang/en'"><img class="h-4 block" src="/images/en.png" alt="English"></a>
                            </div>
                            <div v-if="locale != 'sr'" class="py-2 px-3" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a :href="'/lang/sr'"><img class="h-4 block" src="/images/sr.png" alt="Srpski"></a>
                            </div>
                        </div>
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
                locale: localStorage.getItem('locale')
            }
        },
        methods: {
            toggleShow: function() {
                this.showMenu = !this.showMenu;
            }
        },
    }
</script>
