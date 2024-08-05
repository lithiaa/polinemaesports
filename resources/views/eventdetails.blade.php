<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polinema Esports</title>
    <link rel="icon" href="../public/content/polinemaesports.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tailus/tailus-ui@1.0.0-beta.1/dist/tailus-ui.min.css" rel="stylesheet">
    <style>
        .preserve-whitespace {
            white-space: pre-wrap;
        }
    </style>
</head>

<body class="antialiased bg-gray-100">
    <header class="bg-white shadow fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo dan Tombol Toggle Mobile Menu -->
                <a href="{{ route('landing') }}">
                    <img src="../content/polinemaesports.png" alt="Logo Polinema Esports" width="100" height="100">
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
                    {{-- <a class="font-semibold hover:text-yellow-500" href="">Staff</a> --}}
                    <a class="p-1 px-4 font-semibold hover:text-yellow-500 {{ request()->routeIs('partnership') ? 'bg-yellow-500 rounded-lg text-white' : '' }}" href="{{ route('partnership') }}">Partnership</a>
                    <a class="p-1 px-4 font-semibold hover:text-yellow-500 {{ request()->routeIs('about') ? 'bg-yellow-500 rounded-lg text-white' : '' }}" href="{{ route('about') }}">About Us</a>
                </div>
            </div>
            <!-- Menu dropdown untuk mobile -->
            <div class="lg:hidden flex-col items-end" id="mobile-menu" style="display: none;">
                <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('landing') }}">Home</a>
                <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('event') }}">Events</a>
                {{-- <a class="block mt-4 font-semibold hover:text-yellow-500" href="">Staff</a> --}}
                <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('partnership') }}">Partnership</a>
                <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('about') }}">About Us</a>
            </div>        
        </div>
    </header>
    
    <main>
        <article class="bg-white text-nowrap rounded-lg shadow-md overflow-hidden bg-gray-200">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
                <div class="text-center">
                    <p class="mt-28 text-3xl leading-8 font-semibold tracking-tight text-gray-900">
                        {{ $event->nama_event }}
                    </p>
                    <div
                        class="p-4 pt-10 flex-shrink-0 border rounded justify-items-center flex justify-center items-center">
                        <img src="{{ asset('storage/' . $event->gambar_event) }}" alt="Event 1" height="750" width="750">
                    </div>
                </div>
                <div class="mt-10">
                    <div class="flex">
                        <div>
                            <p class="m-5 text-lg text-gray-500 preserve-whitespace">{{ $event->deskripsi_event }}
                        </div>
                        <div class="mt-auto text-gray-700 text-sm">
                        </div>
                    </div>
                    <hr class="border-t border-gray-300 mb-2">
                    <div class="flex justify-end">
                        <span class="ml-5">Created at: {{ $event->created_at }} </span>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-left">
                <img src="../content/polinemaesports.png" alt="Logo Polinema Esports" width="150" height="150">
                {{-- <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-400 hover:text-gray-300">About</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-400 hover:text-gray-300">Services</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-400 hover:text-gray-300">Contact</a>
                </div> --}}
            </nav>
            <hr class="border-t mt-8 border-gray-300">
            <div class="flex justify-between">
                <p class="mt-5 text-left text-base text-gray-400">
                    &copy; 2024 Polinema Esports. All rights reserved.
                </p>
                <div class="flex justify-end space-x-5">
                    <a href="https://www.instagram.com/polinemaesports/" target="_blank">
                        <svg class="mt-5 h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8
                                 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7
                                 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@polinemaesport">
                        <svg class="mt-5 h-8 w-8 text-gray-400" cxmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 576 512">
                            <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9
                                11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                    </a>
                    <a href="https://discord.gg/AkjB5uptrU">
                        <svg class="mt-5 h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 640 512">
                            <path
                                d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2
                                 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0
                                  610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z" />
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@polinemaesports">
                        <svg class="mt-5 h-7 w-7 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 448 512">
                            <path
                                d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
