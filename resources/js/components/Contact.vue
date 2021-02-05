<template>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-6">
            <h1 class="text-2xl font-semibold mt-2 pb-4 p-2">Contact</h1><hr>
            <div class="flex flex-wrap py-4">
                <div class="w-full sm:w-2/3 px-2">
                <contact-form-component></contact-form-component></div>
                <div class="w-full sm:w-1/3 px-8">
                    <p class="text-lg font-semibold leading-6">
                        Univerzitet u Beogradu<br>
                        Mašinski Fakultet<br>
                        Časopis Upravljanja Kvalitetom
                    </p>
                    <p class="mt-3 leading-6">
                        Kraljice Marije 61,<br>
                        11200 Beograd<br>
                        Srbija
                    </p>
                    <p class="mt-3 leading-6">
                        P: <a class="text-blue-600 hover:text-blue-800" :href="'tel:+381111234567'">+381 11 1234567</a><br>
                        E: <a class="text-blue-600 hover:text-blue-800" :href="'mailto: test@test.com'">test@test.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

    };
</script>
