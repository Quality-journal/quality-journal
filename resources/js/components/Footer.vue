<template>

    <div class="bg-blue-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white h-auto">
            <div class="flex flex-wrap py-4 px-4">
                <div class="w-full sm:w-1/4 px-2">
                    <a :href="'/'"><span class="font-semibold text-xl tracking-tight px-6 md:px-0">Quality Journal</span></a>
                </div>
                <div class="w-full sm:w-2/4 px-8 mt-4 sm:mt-0">
                    <p class="font-bold">{{ $trans('strings.Časopis Upravljanja Kvalitetom') }}</p>
                    <ul class="list-style-none mt-2">
                        <li><a :href="'/articles'">{{ $trans('strings.Članci') }}</a></li>
                        <li><a :href="'/manual'">{{ $trans('strings.Uputstvo za autore') }}</a></li>
                        <li><a :href="'/about'">{{ $trans('strings.O Časopisu') }}</a></li>
                        <li><a :href="'/contact'">{{ $trans('strings.Kontakt') }}</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/4 px-8">
                    <p class="font-bold">{{ $trans('strings.Kontakt') }}</p>
                    <p class="mt-2">
                        Univerzitet u Beogradu<br>
                        Mašinski Fakultet<br>
                        Kraljice Marije 16<br>
                        12000 Beograd, Srbija
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white h-auto">
            <div class="flex flex-wrap py-4 px-4">
                <div class="w-full sm:w-1/2"><p>@2021 {{ $trans('strings.Časopis Upravljanja Kvalitetom') }}</p></div>
                <div class="w-full sm:w-1/2"><p class="md:float-right">Project Land</p></div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

    }
</script>

