    @extends('layouts.app')

    @section('content')
        <section class="bg-gray-100">
            <div class="px-4 sm:px-6 lg:px-8 pb-20">
                <div id="default-carousel" class="mt-10 relative w-full overflow-hidden rounded-md shadow-lg shadow-black"
                    data-carousel="slide">
                    <div class="relative overflow-hidden" style="height: 60vh">
                        @foreach ($news as $n)
                            <div class="flex flex-col sm:flex-row w-full h-full transition-opacity duration-1000 ease-in-out"
                                data-carousel-item>
                                <div class="relative w-full sm:w-1/2 h-56 sm:h-full">
                                    <img src="{{ asset('content/' . $n->gambar_news) }}"
                                        class="block w-full h-full object-cover" alt="...">
                                    <div class="absolute inset-0">
                                    </div>
                                </div>
                                <div class="w-full sm:w-1/2 bg-white p-6 md:p-12 flex items-center justify-center h-full">
                                    <div>
                                        <h2 class="text-black text-xl md:text-4xl font-bold mb-2 md:mb-4">
                                            {{ $n->name_news }}</h2>
                                        <p class="text-black text-xs md:text-lg mb-4">{{ $n->deskripsi_news }}</p>
                                        <a href="{{ $n->link_news }}">
                                            <button
                                                class="px-6 md:px-8 py-2 md:py-3 border border-transparent text-sm md:text-base font-medium rounded-lg text-white bg-yellow-500 hover:bg-yellow-700 transition duration-300">
                                                {{ $n->tombol_news }}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button
                        class="absolute sm:top-1/2 top-1/4 left-4 z-30 flex items-center justify-center w-8 md:w-10 h-8 md:h-10 rounded-full bg-black bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 -translate-y-1/2"
                        data-carousel-prev>
                        &#10094;
                    </button>
                    <button
                        class="absolute sm:top-1/2 top-1/4 right-4 z-30 flex items-center justify-center w-8 md:w-10 h-8 md:h-10 rounded-full bg-black bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 -translate-y-1/2"
                        data-carousel-next>
                        &#10095;
                    </button>
                </div>
            </div>

            <div id="events" class="mx-auto pb-12 sm:mx-8 lg:items-center lg:justify-between lg:px-8 bg-gray-800 py-10 rounded-lg shadow-black shadow-lg">
                <div class="text-center px-10 pb-4 sm:pb-10">
                    <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-white sm:text-4xl">Event Terkini
                    </p>
                </div>
                <div class="">
                    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-6">
                        @foreach ($events->take(2) as $event)
                            <div class="flex place-content-center">
                                <a href="{{ route('event.show', $event->id_event) }}">
                                    <div class="p-4 flex-shrink transition transform hover:scale-105 hover:bg-gray-700 h-full w-full">
                                    <div class="p-4 flex-shrink-0 border mb-4 sm:mb-0 sm:mr-4">
                                        <img src="{{ asset('storage/' . $event->gambar_event) }}"
                                            alt="{{ $event->nama_event }}" class="w-700 h-700">
                                    </div>
                                        <p class="text-xl sm:text-2xl mt-5 font-medium text-gray-100">
                                            {{ $event->nama_event }}</p>
                                        <p class="mt-5 text-sm sm:text-lg text-gray-100">{{ $event->deskripsi_singkat }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        @for ($i = $events->count(); $i < 2; $i++)
                            <div class="flex place-content-center">
                                <div class="p-4 flex-shrink-0 border rounded" style="max-width: 500px;">
                                    <div class="w-full h-48 bg-gray-200"></div>
                                    <h3 class="text-2xl mt-5 leading-6 font-medium text-gray-900">Event belum tersedia</h3>
                                    <p class="mt-5 text-lg text-gray-500">Nantikan event yang akan datang di Polinema
                                        Esports!</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="mt-8"></div>
                <div class="flex justify-between">
                    <a href="{{ route('event') }}" class="flex transition transform hover:scale-105 hover:underline text-yellow-500">
                        <p class="ml-5 text-left font-semibold text-xl text-white">
                            Lainnya
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 ml-1 mt-0.5 text-white" width="30" height="30">>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="text-center p-10 pb-10">
                <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Game Division
                </p>
            </div>

            <section class="w-full relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
                    <img src="content/foto_divisi/MobileLegends.jpg" alt="Mobile Legends"
                        class="w-full h-80 sm:h-96 object-cover">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="content/foto_divisi/MobileLegendsLogo.png" alt="Mobile Legends Logo"
                            class="w-40 sm:w-60 h-auto">
                    </div>
                </div>
            </section>

            <section class="w-full relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
                    <img src="content/foto_divisi/PUBGM.jpg" alt="PUBG Mobile"
                        class="w-full h-80 sm:h-96 object-cover">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="content/foto_divisi/PUBGMLogo.png" alt="PUBG Mobile Logo"
                            class="w-40 sm:w-60 h-auto">
                    </div>
                </div>
            </section>

            <section class="w-full relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
                    <img src="content/foto_divisi/Valorant.jpg" alt="Valorant"
                        class="w-full h-80 sm:h-96 object-cover">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 z-30 flex items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="content/foto_divisi/ValorantLogo.png" alt="Valorant Logo"
                            class="w-40 sm:w-60 h-auto">
                    </div>
                </div>
            </section>

            <section class="w-full relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
                    <img src="content/foto_divisi/HonorOfKings.jpg" alt="Honor of Kings"
                        class="w-full h-80 sm:h-96 object-cover">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 z-30 flex items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="content/foto_divisi/HonorOfKingsLogo.png" alt="Honor of Kings Logo"
                            class="w-40 sm:w-60 h-auto">
                    </div>
                </div>
            </section>

            <div>
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8 mt-5">
                    <div class="text-center">
                        <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                            Partnership</p>
                    </div>
                    <div class="mt-12">
                        <div class="grid grid-cols-2 gap-y-10 md:grid-cols-2 lg:grid-cols-4 justify-items-center">
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://www.evos.gg/">
                                        <img src="content/foto_partner/partner1.png" alt="Partner 1"
                                            height="200" width="200">
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://moontonstudentleader.com.my/msl-landing">
                                        <img src="content/foto_partner/partner2.png" alt="Partner 2"
                                            height="200" width="200">
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://pmjc.id/">
                                        <img src="content/foto_partner/partner3.png" alt="Partner 3"
                                            height="200" width="200">
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://hokacecommunity.id/">
                                        <img src="content/foto_partner/partner4.png" alt="Partner 4"
                                            height="200" width="200">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10"></div>
            </div>
        </section>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            document.getElementById('learnmore-btn').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#events').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        </script>
    @endsection
