<!-- Desktop Header -->
<header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
            <img src="{{ asset('/images/user-avatar.webP') }}">
        </button>
        <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
        <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="py-2 px-2 ml-2" href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Odjava') }}
                </a>
            </form>
        </div>
    </div>
</header>

<!-- Mobile Header & Nav -->
<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="/" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">

        <a href="{{ route('pages.index') }}" class=" @if(Route::is('pages.*')) active-nav-link @endif flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Stranice
        </a>

        <a href="{{ route('photos.index') }}" class=" @if(Route::is('photos.*')) active-nav-link @endif flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-image mr-3"></i>
            Slike za početnu
        </a>

        <a href="{{ route('selections.index') }}" class=" @if(Route::is('selections.*')) active-nav-link @endif flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-scroll mr-3"></i>
            Selekcije
        </a>

        <a href="{{ route('documents.index') }}" class=" @if(Route::is('documents.*')) active-nav-link @endif flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-file mr-3"></i>
            Dokumenta
        </a>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="flex items-center text-white py-2 pl-4 nav-item" href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Odjava') }}
            </a>
        </form>
    </nav>
</header>
