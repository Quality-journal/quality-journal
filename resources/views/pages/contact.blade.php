<x-guest-layout>
    <x-slot name="title">Journal of Quality and System Engineering | Contact</x-slot>
    <x-slot name="description">{{ 'contact page' }}</x-slot>
    <x-slot name="keywords">{{ 'contact, journal, of, quality, system, engineering' }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-6">
            <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-gray-800">
                Contact
            </h1>
            <hr />
            <div class="flex flex-wrap py-4">
                <div class="w-full sm:w-3/5 mb-5">
                    <div>
                        <form action="/sendmail" ref="form" method="get" id="form">
                            <div class="shadow overflow-hidden">
                                <div class="px-4 py-5 sm:p-6" style="background-color: #f5f5fa;">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-12">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                            <input type="text" id="name" name="name" required="required" class="
                                      w-full
                                      bg-white
                                      rounded
                                      border border-gray-300
                                      focus:border-newyellow focus:ring-2 focus:ring-newyellow
                                      text-base
                                      outline-none
                                      text-gray-700
                                      py-1
                                      px-3
                                      leading-8
                                      transition-colors
                                      duration-200
                                      ease-in-out
                                    " />
                                        </div>
                                        <div class="col-span-12">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Email address</label>
                                            <input type="email" id="email" name="email" required class="
                                      w-full
                                      bg-white
                                      rounded
                                      border border-gray-300
                                      focus:border-newyellow focus:ring-2 focus:ring-newyellow
                                      text-base
                                      outline-none
                                      text-gray-700
                                      py-1
                                      px-3
                                      leading-8
                                      transition-colors
                                      duration-200
                                      ease-in-out
                                    " />
                                        </div>
                                        <div class="col-span-12">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Message</label>
                                            <textarea id="message" name="message" required class="
                                      w-full
                                      bg-white
                                      rounded
                                      border border-gray-300
                                      focus:border-newyellow focus:ring-2 focus:ring-newyellow
                                      h-32
                                      text-base
                                      outline-none
                                      text-gray-700
                                      py-1
                                      px-3
                                      resize-none
                                      leading-6
                                      transition-colors
                                      duration-200
                                      ease-in-out
                                    "></textarea>
                                        </div>
                                    </div>
                                    {!! Lunaweb\RecaptchaV3\Facades\RecaptchaV3::field('contactme') !!}
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 formdiv">
                                    <button type="submit" class="
                                  text-white
                                  bg-gray-600
                                  border-0
                                  py-2
                                  px-6
                                  focus:outline-none
                                  hover:bg-newyellow
                                  hover:text-gray-800
                                  rounded
                                  text-lg
                                  transition-all
                                ">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full sm:w-2/5 px-8 text-lg">
                    <p class="text-xl font-semibold leading-6 mt-4 text-gray-800">
                        Editor in chief:
                    </p>
                    <p class="mt-1">
                        Miloš Vasić<br />
                        E:
                        <a class="text-blue-600 hover:text-blue-800" href="mailto:office@q-sci.rs">office@q-sci.rs</a>
                    </p>
                    {{-- <p class="text-xl font-semibold leading-6 mt-4 text-gray-800">
                        Editorial office:
                    </p>
                    <p class="mt-1">
                        Kraljice Marije 16,<br />11000 Belgrade, Serbia<br />
                        E:
                        <a class="text-blue-600 hover:text-blue-800" href="mailto:office@q-sci.rs">office@q-sci.rs</a>
                    </p> --}}
                    <p class="mt-4 text-xl font-semibold leading-6 text-gray-800">
                        Publisher:
                    </p>
                    <p class="mt-1">
                        <strong>Institute for research</strong>
                        <strong>and design in industry</strong><br />
                    <p>Vatroslava Lisinskog 12a, 11000 Belgrade, Serbia</p>
                    W:
                    <a class="text-blue-600 hover:text-blue-800" href="https://www.iipp.rs/" target="blank">www.iipp.rs</a><br>
                    E:
                    <a class="text-blue-600 hover:text-blue-800" :href="'mailto: office@iipp.rs'">office@iipp.rs</a>
                    </p>
                    <p class="mt-4 text-xl font-semibold leading-6 text-gray-800">
                        Co-Publisher:
                    </p>
                    <p class="mt-1">
                        <strong>Association for Quality, Acreditation and Standardization</strong><br />
                    <p>Takovska 5, 11000 Belgrade, Serbia</p>
                    W:
                    <a class="text-blue-600 hover:text-blue-800" href="https://www.ukas.rs/" target="blank">www.ukas.rs</a><br>
                    E:
                    <a class="text-blue-600 hover:text-blue-800" :href="'mailto: office@ukas.rs'">office@ukas.rs</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
