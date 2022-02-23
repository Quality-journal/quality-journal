<x-guest-layout>
    <x-slot name="title">Journal of Quality Engineering | Contact</x-slot>
    <x-slot name="description">{{ 'contact page' }}</x-slot>
    <x-slot name="keywords">{{ 'contact, journal, of, quality, engineering' }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-6">
            <h1 class="text-2xl font-semibold mt-2 pb-4 py-2 text-yellow-500">
                Contact
            </h1>
            <hr />
            <div class="flex flex-wrap py-4">
                <div class="w-full sm:w-2/3 mb-5">

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
                                      focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200
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
                                      focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200
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
                                      focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200
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
                                    {!! RecaptchaV3::field('contactme') !!}
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 formdiv">
                                    <button type="submit" class="
                                  text-white
                                  bg-yellow-500
                                  border-0
                                  py-2
                                  px-6
                                  focus:outline-none
                                  hover:opacity-80
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
                <div class="w-full sm:w-1/3 px-8 text-lg">
                    <p class="text-xl font-semibold leading-6 mt-4 text-orange">
                        Editor in chief:
                    </p>
                    <p class="mt-1">
                        Dr Nada Stanojević<br />
                        E:
                        <a class="text-blue-600 hover:text-blue-800" href="mailto:nstanojevic@m-sci.rs">nstanojevic@m-sci.rs</a>
                    </p>
                    <p class="text-xl font-semibold leading-6 mt-4 text-orange">
                        Editorial office:
                    </p>
                    <p class="mt-1">
                        Kraljice Marije 16,<br />11000 Belgrade, Serbia<br />
                        E:
                        <a class="text-blue-600 hover:text-blue-800" href="mailto:office@m-sci.rs">office@m-sci.rs</a>
                    </p>
                    <p class="mt-4 text-xl font-semibold leading-6 text-orange">
                        Publisher:
                    </p>
                    <p class="mt-1">
                        <strong>Institute for research</strong><br />
                        <strong>and design in industry</strong><br />
                        E:
                        <a class="text-blue-600 hover:text-blue-800" :href="'mailto: office@iipp.rs'">office@iipp.rs</a>
                    </p>
                    <p class="mt-4 text-xl font-semibold leading-6 text-orange">
                        Co-Publisher:
                    </p>
                    <p class="mt-1">
                        <strong>Serbian Maintenance Society</strong><br />
                        E:
                        <a class="text-blue-600 hover:text-blue-800" :href="'mailto: office@dots.rs'">office@dots.rs</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
