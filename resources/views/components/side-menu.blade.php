<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('dashboard') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex items-center text-white py-4 pl-6 nav-item @if(Route::is('dashboard')) active-nav-link @endif">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('pages.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item @if(Route::is('pages.*')) active-nav-link @endif">
            <i class="fas fa-sticky-note mr-3"></i>
            Stranice
        </a>
        <a href="{{ route('selections.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item @if(Route::is('selections.*')) active-nav-link @endif">
            <i class="fas fa-scroll mr-3"></i>
            Selekcije
        </a>
    </nav>
</aside>
