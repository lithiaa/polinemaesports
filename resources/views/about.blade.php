@extends('layouts.app')

@section('content')
    <!-- About Us Section -->
    <section class="py-10">
        <div class="container mx-auto">
            <div class="px-8">
                <h2 class="text-3xl font-bold text-center text-black">Tentang Kami</h2>
                <p class="mt-6 text-md sm:text-lg text-center text-gray-600">Selamat datang di Polinema Esports! Kami adalah komunitas
                    mahasiswa Politeknik Negeri Malang yang berdedikasi dan bersemangat dalam dunia esports. Misi kami
                    adalah
                    untuk mendukung dan memajukan kegiatan esports di kampus dengan menyelenggarakan acara, turnamen, serta
                    menyediakan platform bagi para gamers untuk berinteraksi dan meningkatkan keterampilan mereka.</p>
            </div>
            {{-- <!-- Tim Kami Section -->
            <div class="mt-12">
                <h3 class="text-3xl font-bold text-center text-black">Tim Kami</h3>
                <p class="mt-2 text-gray-600 text-center">Kenali anggota-anggota staff yang berdedikasi di balik Polinema
                    Esports, yang mendorong komunitas kami maju.</p>
                <div class="mt-12 flex flex-col lg:flex-row justify-center items-center lg:space-x-8">
                    <div class="flex flex-col items-center mb-8 lg:mb-0">
                        <img src="path/to/our-team.jpg" alt="Tim Kami" class="w-48 h-48 rounded-full shadow-lg">
                        <h4 class="mt-4 text-2xl font-semibold text-black">Nama Anggota 1</h4>
                        <p class="mt-2 text-gray-600 text-center">Peran dalam tim</p>
                    </div>
                    <div class="flex flex-col items-center mb-8 lg:mb-0">
                        <img src="path/to/our-team.jpg" alt="Tim Kami" class="w-48 h-48 rounded-full shadow-lg">
                        <h4 class="mt-4 text-2xl font-semibold text-black">Nama Anggota 2</h4>
                        <p class="mt-2 text-gray-600 text-center">Peran dalam tim</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="path/to/our-team.jpg" alt="Tim Kami" class="w-48 h-48 rounded-full shadow-lg">
                        <h4 class="mt-4 text-2xl font-semibold text-black">Nama Anggota 3</h4>
                        <p class="mt-2 text-gray-600 text-center">Peran dalam tim</p>
                    </div>
                </div>
            </div> --}}

            <!-- Visi dan Misi Section -->
            <div class="mt-12 flex flex-col lg:flex-row justify-center items-center p-10 lg:space-x-8">
                <div class="flex flex-col items-center mb-8 lg:mb-0 sm:w-1/3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 h-40 text-gray-800" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <h3 class="mt-4 text-2xl font-semibold text-black">Visi Kami</h3>
                    <p class="mt-2 text-gray-600 text-center">Menjadi komunitas esports kampus terkemuka yang unggul dalam
                        inovasi dan prestasi.</p>
                </div>
                <div class="flex flex-col items-center sm:w-1/3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-40 h-40 text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                    </svg>
                    <h3 class="mt-4 text-2xl font-semibold text-black">Misi Kami</h3>
                    <p class="mt-2 text-gray-600 text-center">Mengembangkan komunitas esports yang inklusif. Memfasilitasi pertumbuhan kompetitif mahasiswa Polinema, dan Meningkatkan prestasi di tingkat regional, nasional, dan internasional.</p>
                </div>
            </div>


            <!-- Benefit Section -->
            <div class="mt-12 bg-gray-800 p-10 md:mx-8 rounded-lg shadow-black shadow-lg">
                <h3 class="text-3xl font-bold text-left text-white">Benefit</h3>
                <p class="mt-4 text-md text-left sm:w-1/2 text-gray-300">Polinema Esports merupakan salah satu komunitas
                    yang paling
                    digemari oleh para mahasiswa di Polinema. Bergabung dengan komunitas Polinema Esports memberikan benefit
                    yang unik dan berharga.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                    <div class="text-center">
                        <div class="flex justify-center mb-4">
                            <img src="content/icon/puzzle.png" alt="Icon 1" class="w-12 h-12">
                        </div>
                        <h4 class="text-lg font-bold text-white">Kenalan dan Relasi</h4>
                        <p class="text-gray-300 mt-2">Mahasiswa dapat menjalin pertemanan baru dan membangun hubungan dengan
                            orang-orang baik di dalam maupun di luar lingkungan kampus.</p>
                    </div>

                    <div class="text-center">
                        <div class="flex justify-center mb-4">
                            <img src="content/icon/gamepad.png" alt="Icon 2" class="w-12 h-12">
                        </div>
                        <h4 class="text-lg font-bold text-white">Event dan Turnamen</h4>
                        <p class="text-gray-300 mt-2">Kesempatan untuk mengikuti event dan berkompetisi di turnamen tingkat
                            nasional dan
                            internasional.</p>
                    </div>

                    <div class="text-center">
                        <div class="flex justify-center mb-4">
                            <img src="content/icon/chat.png" alt="Icon 3" class="w-12 h-12">
                        </div>
                        <h4 class="text-lg font-bold text-white">Kerjasama dan Kolaborasi</h4>
                        <p class="text-gray-300 mt-2">Kami membina game yang mendorong kerjasama tim, sehingga membantu
                            mahasiswa mengembangkan keterampilan kolaborasi dan komunikasi</p>
                    </div>
                </div>
            </div>

            <!-- Statistics Section -->
            <div class="mt-12 px-8">
                <h3 class="text-3xl font-bold text-center text-black pt-20">Pencapaian Kami</h3>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h4 class="text-4xl font-bold text-white">2019</h4>
                        <p class="mt-2 text-gray-300">Berdiri Sejak</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h4 class="text-4xl font-bold text-white">700+</h4>
                        <p class="mt-2 text-gray-300">Anggota Komunitas</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h4 class="text-4xl font-bold text-white">30+</h4>
                        <p class="mt-2 text-gray-300">Prestasi yang diperoleh</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gray-200 p-8 md:mx-8 rounded-lg shadow-black shadow-xl">
                <h3 class="text-3xl font-bold text-center text-black">Apa yang Kami Lakukan?</h3>
                <p class="mt-6 text-md sm:text-lg text-center text-gray-600">Polinema Esports tidak hanya tentang bermain game. kami
                    berfokus pada pengembangan komunitas, kompetisi, dan kolaborasi.</p>
                <ul class="mt-4 text-md sm:text-lg text-gray-600 list-disc list-inside space-y-2">
                    <li>Menyelenggarakan turnamen internal dan eksternal dengan berbagai genre game populer.</li>
                    <li>Sesi pelatihan/scrim dengan pemain profesional</li>
                    <li>Menjalin kemitraan dengan organisasi esports nasional dan internasional.</li>
                    <li>Acara komunitas dan meetup</li>
                    <li>Diskusi dengan sesama anggota komunitas lainnya</li>
                </ul>
            </div>

            <div id="default-carousel" class="mt-20 relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-96 overflow-hidden md:h-96">
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="content/foto_dokumentasi/dokumentasi1.jpg"
                            class="block w-full h-full object-cover" alt="...">
                    </div>
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="content/foto_dokumentasi/dokumentasi2.jpg"
                            class="block w-full h-full object-cover" alt="...">
                    </div>
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="content/foto_dokumentasi/dokumentasi3.jpg"
                            class="block w-full h-full object-cover" alt="...">
                    </div>
                </div>
                <div
                    class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                    <h2 class="text-white text-4xl font-bold mb-4">Join our community</h2>
                    <a href="https://linktr.ee/polinemaesports">
                        <button
                            class="px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-yellow-500 hover:bg-yellow-700 transition duration-300">Join
                            Us</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
