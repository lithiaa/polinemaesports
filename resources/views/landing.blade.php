@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Hero Section with News Carousel -->
    <div class="px-4 sm:px-6 lg:px-8 pt-8 pb-16">
        <!-- News Carousel -->
        <div id="news-carousel" class="relative w-full max-w-7xl mx-auto overflow-hidden rounded-2xl shadow-2xl bg-white">
            @if($news && $news->count() > 0)
                @foreach ($news as $index => $n)
                    <div class="news-slide" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                        <!-- Mobile Layout -->
                        <div class="block xl:hidden">
                            <!-- Image Section -->
                            <div class="w-full">
                                <div class="news-image-container-mobile">
                                    <img src="{{ asset('storage/' . $n->gambar_news) }}"
                                        class="w-full h-full object-cover block"
                                        alt="{{ $n->name_news }}"
                                        loading="eager">
                                </div>
                            </div>
                            <!-- Text Section - Separate from image -->
                            <div class="bg-white p-4 sm:p-6">
                                <h2 class="text-gray-800 text-base sm:text-lg font-bold mb-3">
                                    {{ $n->name_news }}
                                </h2>
                                <p class="text-gray-600 text-xs sm:text-sm mb-4 line-clamp-3">
                                    {{ $n->deskripsi_news }}
                                </p>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                    <a href="{{ $n->link_news }}" target="_blank">
                                        <button class="w-full sm:w-auto px-4 sm:px-6 py-3 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2">
                                            <span class="text-xs">{{ $n->tombol_news }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0-7.5 7.5M21 12H3" />
                                            </svg>
                                        </button>
                                    </a>
                                    <div class="flex items-center gap-2 text-xs text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ \Carbon\Carbon::parse($n->created_at)->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="hidden xl:flex xl:flex-row">
                            <div class="w-3/5">
                                <div class="news-image-container">
                                    <img src="{{ asset('storage/' . $n->gambar_news) }}"
                                        class="w-full h-full object-cover"
                                        alt="{{ $n->name_news }}">
                                </div>
                            </div>
                            <div class="w-2/5 bg-white p-8 xl:p-12 flex items-center">
                                <div class="w-full">
                                    <div class="mb-4">
                                        <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full uppercase tracking-wide">
                                            Berita Terkini
                                        </span>
                                    </div>
                                    <h2 class="text-gray-800 text-xl 2xl:text-3xl font-bold mb-6 leading-tight">
                                        {{ $n->name_news }}
                                    </h2>
                                    <p class="text-gray-600 text-sm xl:text-base mb-8 leading-relaxed">
                                        {{ Str::limit($n->deskripsi_news, 200) }}
                                    </p>
                                    <div class="mb-8">
                                        <a href="{{ $n->link_news }}" target="_blank">
                                            <button class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center gap-3">
                                                <span>{{ $n->tombol_news }}</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0-7.5 7.5M21 12H3" />
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="pt-6 border-t border-gray-200">
                                        <div class="flex items-center gap-2 text-xs text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Dipublikasikan {{ \Carbon\Carbon::parse($n->created_at)->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Navigation & Indicators (Only if more than 1 news) -->
                @if($news->count() > 1)
                    <!-- Navigation Buttons -->
                    <button id="prev-btn" class="absolute top-1/2 left-6 z-30 flex items-center justify-center w-12 h-12 rounded-full bg-white/80 backdrop-blur-sm text-gray-700 hover:bg-white hover:text-yellow-600 shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="next-btn" class="absolute top-1/2 right-6 z-30 flex items-center justify-center w-12 h-12 rounded-full bg-white/80 backdrop-blur-sm text-gray-700 hover:bg-white hover:text-yellow-600 shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Indicators -->
                    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-30">
                        @foreach($news as $index => $item)
                            <button class="w-3 h-3 rounded-full transition-all duration-300 indicator-dot"
                                    style="background-color: {{ $index === 0 ? 'rgb(255 255 255)' : 'rgba(255, 255, 255, 0.5)' }}"
                                    data-slide="{{ $index }}"></button>
                        @endforeach
                    </div>
                @endif
            @else
                <!-- No News Available -->
                <div class="flex items-center justify-center h-96 bg-gray-100">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum Ada Berita</h3>
                        <p class="text-gray-500">Berita akan ditampilkan di sini ketika sudah tersedia.</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Additional Info -->
        @if($news && $news->count() > 1)
            <div class="text-center mt-8">
                <p class="text-gray-500 text-sm">
                    <span class="inline-flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Geser untuk melihat berita lainnya
                    </span>
                </p>
            </div>
        @endif
    </div>

    <!-- Events Section -->
    <div id="events" class="mx-auto pb-12 sm:mx-8 lg:items-center lg:justify-between lg:px-8 bg-gray-800 py-10 rounded-lg shadow-black shadow-lg">
        <div class="text-center px-10 pb-4 sm:pb-10">
            <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-white sm:text-4xl">Event Terkini</p>
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
                            <p class="mt-5 text-lg text-gray-500">Nantikan event yang akan datang di Polinema Esports!</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="mt-8"></div>
        <div class="flex justify-between">
            <a href="{{ route('event') }}" class="flex transition transform hover:scale-105 hover:underline text-yellow-500">
                <p class="ml-5 text-left font-semibold text-xl text-white">Lainnya</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 ml-1 mt-0.5 text-white" width="30" height="30">>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Game Division Section -->
    <div class="text-center p-10 pb-10">
        <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Game Division</p>
    </div>

    <section class="w-full relative">
        <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
            <img src="content/foto_divisi/MobileLegends.jpg" alt="Mobile Legends"
                class="w-full h-80 sm:h-96 object-cover">
            <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                <img src="content/foto_divisi/MobileLegendsLogo.png" alt="Mobile Legends Logo"
                    class="w-40 sm:w-60 h-auto">
            </div>
        </div>
    </section>

    <section class="w-full relative">
        <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
            <img src="content/foto_divisi/PUBGM.jpg" alt="PUBG Mobile"
                class="w-full h-80 sm:h-96 object-cover">
            <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                <img src="content/foto_divisi/PUBGMLogo.png" alt="PUBG Mobile Logo"
                    class="w-40 sm:w-60 h-auto">
            </div>
        </div>
    </section>

    <section class="w-full relative">
        <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
            <img src="content/foto_divisi/Valorant.jpg" alt="Valorant"
                class="w-full h-80 sm:h-96 object-cover">
            <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                <img src="content/foto_divisi/ValorantLogo.png" alt="Valorant Logo"
                    class="w-40 sm:w-60 h-auto">
            </div>
        </div>
    </section>

    <section class="w-full relative">
        <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center w-full">
            <img src="content/foto_divisi/HonorOfKings.jpg" alt="Honor of Kings"
                class="w-full h-80 sm:h-96 object-cover">
            <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                <img src="content/foto_divisi/HonorOfKingsLogo.png" alt="Honor of Kings Logo"
                    class="w-40 sm:w-60 h-auto">
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <div>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8 mt-5">
            <div class="text-center">
                <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Partnership</p>
            </div>
            <div class="mt-12">
                <div class="grid grid-cols-2 gap-y-10 md:grid-cols-2 lg:grid-cols-4 justify-items-center">
                    <div class="flex">
                        <div class="p-4 flex-shrink">
                            <a href="https://www.evos.gg/">
                                <img src="content/foto_partner/partner1.png" alt="Partner 1" height="200" width="200">
                            </a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="p-4 flex-shrink">
                            <a href="https://moontonstudentleader.com.my/msl-landing">
                                <img src="content/foto_partner/partner2.png" alt="Partner 2" height="200" width="200">
                            </a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="p-4 flex-shrink">
                            <a href="https://pmjc.id/">
                                <img src="content/foto_partner/partner3.png" alt="Partner 3" height="200" width="200">
                            </a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="p-4 flex-shrink">
                            <a href="https://hokacecommunity.id/">
                                <img src="content/foto_partner/partner4.png" alt="Partner 4" height="200" width="200">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10"></div>
    </div>
</section>

<style>
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* News carousel container */
    #news-carousel {
        min-height: 400px;
    }

    /* Desktop news image container - 16:9 aspect ratio */
    .news-image-container {
        aspect-ratio: 16/9;
        width: 100%;
        overflow: hidden;
        position: relative;
    }
    .news-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    /* Mobile news image container - 16:9 aspect ratio with consistent sizing */
    .news-image-container-mobile {
        aspect-ratio: 16/9;
        width: 100%;
        overflow: hidden;
        position: relative;
        background-color: #f3f4f6;
    }
    .news-image-container-mobile img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Responsive adjustments maintaining 16:9 aspect ratio */
    @media (min-width: 1280px) {
        /* Desktop: Fixed height maintaining 16:9 */
        .news-image-container {
            height: 450px; /* 16:9 ratio for 800px width */
        }
        #news-carousel {
            min-height: 450px;
        }
    }

    @media (max-width: 1279px) and (min-width: 768px) {
        /* Tablet: Adjust for container width */
        .news-image-container-mobile {
            /* Height will be calculated by aspect-ratio based on container width */
        }
        #news-carousel {
            min-height: 500px;
        }
    }

    @media (max-width: 767px) {
        /* Mobile: Ensure proper 16:9 ratio */
        .news-image-container-mobile {
            /* Height will be calculated by aspect-ratio based on container width */
            min-height: 200px;
        }
        #news-carousel {
            min-height: 400px;
        }
    }

    @media (max-width: 480px) {
        #news-carousel {
            min-height: 350px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.news-slide');
        const indicators = document.querySelectorAll('.indicator-dot');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        let currentSlide = 0;

        console.log('News carousel initialized with', slides.length, 'slides');

        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.style.display = 'none';
            });

            // Show current slide
            if (slides[index]) {
                slides[index].style.display = 'block';
            }

            // Update indicators
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.style.backgroundColor = 'rgb(255 255 255)';
                } else {
                    indicator.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
                }
            });

            currentSlide = index;
        }

        // Initialize first slide
        if (slides.length > 0) {
            showSlide(0);
        }

        // Navigation buttons
        if (nextBtn && slides.length > 1) {
            nextBtn.addEventListener('click', function() {
                const nextIndex = (currentSlide + 1) % slides.length;
                showSlide(nextIndex);
            });
        }

        if (prevBtn && slides.length > 1) {
            prevBtn.addEventListener('click', function() {
                const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(prevIndex);
            });
        }

        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                showSlide(index);
            });
        });

        // Auto-slide (optional)
        if (slides.length > 1) {
            setInterval(() => {
                const nextIndex = (currentSlide + 1) % slides.length;
                showSlide(nextIndex);
            }, 5000);
        }
    });
</script>
@endsection
