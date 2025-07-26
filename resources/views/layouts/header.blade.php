<header class="bg-white shadow fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo dan Tombol Toggle Mobile Menu -->
            <a href="{{ route('landing') }}">
                <img src="content/polinemaesports.png" alt="Logo Polinema Esports" width="90" height="90">
            </a>
            <div class="flex lg:hidden">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Menu untuk desktop -->
            <div class="hidden lg:flex justify-end space-x-3">
                <a class="p-1 px-4 font-semibold hover:text-yellow-500 {{ request()->routeIs('landing') ? 'bg-yellow-500 rounded-lg text-white' : '' }}" href="{{ route('landing') }}">Home</a>
                <a class="p-1 px-4 font-semibold hover:text-yellow-500 {{ request()->routeIs('event') ? 'bg-yellow-500 rounded-lg text-white' : '' }}" href="{{ route('event') }}">Events</a>
                <a class="p-1 px-4 font-semibold hover:text-yellow-500 {{ request()->routeIs('partnership') ? 'bg-yellow-500 rounded-lg text-white' : '' }}" href="{{ route('partnership') }}">Partnership</a>
                <a class="p-1 px-4 font-semibold hover:text-yellow-500 {{ request()->routeIs('about') ? 'bg-yellow-500 rounded-lg text-white' : '' }}" href="{{ route('about') }}">About Us</a>
            </div>
        </div>
        <!-- Menu dropdown untuk mobile -->
        <div class="lg:hidden flex-col items-end" id="mobile-menu" style="display: none;">
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('landing') }}">Home</a>
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('event') }}">Events</a>
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('partnership') }}">Partnership</a>
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('about') }}">About Us</a>
        </div>
    </div>
</header>
