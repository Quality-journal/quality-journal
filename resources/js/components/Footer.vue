<template>

    <div class="bg-blue-700 footer">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white h-auto">
            <div class="flex flex-wrap py-4 px-4">
                <div class="w-full sm:w-1/4 px-2">
                    <a :href="'/'"><span class="font-semibold text-xl tracking-tight px-6 md:px-0">Journal of Quality Engineering</span></a>
                </div>
                <div class="w-full sm:w-2/4 px-8 mt-4 sm:mt-0">
                    <p class="font-bold">Journal of Quality Engineering</p>
                    <ul class="list-style-none mt-2">
                        <li><a :href="'/browse-issues'">Browse issues</a></li>
                        <li><a :href="'/instructions-for-authors'">Instructions for authors</a></li>
                        <li><a :href="'/about'">About the journal</a></li>
                        <li><a :href="'/submit-a-paper'">Submit a paper</a></li>
                        <li><a :href="'/contact'">Contact</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/4 px-8">
                    <p class="font-bold">Contact</p>
                    <p class="mt-2">
                        UKAS<br>
                        Udruženje za kvalitet,<br>
                        akreditaciju i standardizaciju<br>
                        Takovska 5, Belgrade, Serbia<br>
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white h-auto">
            <div class="flex flex-wrap py-4 px-4">
                <div class="w-full sm:w-1/2"><p>@2021 Journal of Quality Engineering</p></div>
                <div class="w-full sm:w-1/2"><p class="md:float-right">Project Land</p></div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

    }
</script>

<style>
    .bg-color{
        background-color: #FA5F1A;
    }
 
</style>
