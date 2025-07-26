@extends('layouts.app')

@section('content')
    <article class="bg-white rounded-lg overflow-hidden bg-gray-100 sm:mt-4">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
            <div class="text-center">
                <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Meet our
                    Partnerships
                </p>
            </div>
            <div class="mt-10 space-y-10">
                <div class="flex flex-col sm:flex-row items-start sm:items-start">
                    <div class="p-4 flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                        <img src="content/foto_partner/partner1.png" alt="EVOS Esports" height="200"
                            width="200">
                    </div>
                    <div class="w-full sm:w-auto">
                        <div class="box-content h-auto">
                            <p class="m-5 text-sm sm:text-lg text-gray-500">
                                EVOS Esports adalah organisasi esports terkemuka di Asia Tenggara, dikenal dengan tim-tim
                                kompetitifnya yang berprestasi dalam berbagai turnamen internasional. Dengan basis penggemar
                                yang luas dan aktif, EVOS Esports tidak hanya unggul di arena permainan tetapi juga
                                berkomitmen untuk membangun komunitas yang dinamis dan inovatif. Melalui dedikasi, kerja
                                keras, dan semangat juang, EVOS Esports terus menginspirasi dan menetapkan standar baru di
                                dunia esports.
                            </p>
                        </div>
                        <hr class="border-t border-gray-300 mb-2">
                        <div class="flex justify-start space-x-3">
                            <a href="https://www.instagram.com/evosesports/" target="_blank">
                                <svg class="mt-2 ml-4 h-8 w-8 text-gray-900" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8
                                                     26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7
                                                     67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a href="https://www.evos.gg/">
                                <svg class="mt-2 h-8 w-8 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                    <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-start">
                    <div class="p-4 flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                        <img src="content/foto_partner/partner2.png" alt="MSL" height="200" width="200">
                    </div>
                    <div class="w-full sm:w-auto">
                        <div class="box-content h-auto">
                            <p class="m-5 text-sm sm:text-lg text-gray-500">
                                Moonton Student Leader (MSL) adalah program inisiatif dari Moonton yang bertujuan untuk
                                memberdayakan mahasiswa dengan keterampilan kepemimpinan di bidang esports. Program ini
                                memberikan kesempatan bagi mahasiswa untuk belajar langsung dari para profesional di
                                industri, berpartisipasi dalam berbagai proyek esports, dan mengembangkan jaringan yang luas
                                di komunitas esports. Melalui MSL, Moonton berkomitmen untuk mendukung dan membentuk
                                generasi pemimpin esports masa depan yang inovatif dan berwawasan luas.
                            </p>
                        </div>
                        <hr class="border-t border-gray-300 mb-2">
                        <div class="flex justify-start space-x-3">
                            <a href="https://www.instagram.com/mlbb_studentleader/" target="_blank">
                                <svg class="mt-2 ml-4 h-8 w-8 text-gray-900" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8
                                                     26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7
                                                     67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a href="https://moontonstudentleader.com.my/msl-landing">
                                <svg class="mt-2 h-8 w-8 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                    <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-start">
                    <div class="p-4 flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                        <img src="content/foto_partner/partner3.png" alt="PMJC" height="200" width="200">
                    </div>
                    <div class="w-full sm:w-auto">
                        <div class="box-content h-auto">
                            <p class="m-5 text-sm sm:text-lg text-gray-500">
                                PUBG Mobile Jawara Community adalah komunitas yang dibentuk untuk menghubungkan dan
                                memberdayakan para penggemar dan pemain PUBG Mobile di Indonesia. Komunitas ini menyediakan
                                platform bagi anggota untuk berbagi pengalaman, mengasah keterampilan bermain, dan
                                berpartisipasi dalam berbagai turnamen dan acara yang diselenggarakan secara rutin. Melalui
                                kolaborasi dan interaksi yang aktif, PUBG Mobile Jawara Community bertujuan untuk membangun
                                ekosistem esports yang solid dan mendukung pertumbuhan pemain profesional di ranah PUBG
                                Mobile.
                            </p>
                        </div>
                        <hr class="border-t border-gray-300 mb-2">
                        <div class="flex justify-start space-x-3">
                            <a href="https://www.instagram.com/pubgm.jawara/" target="_blank">
                                <svg class="mt-2 ml-4 h-8 w-8 text-gray-900" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8
                                                     26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7
                                                     67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a href="https://pmjc.id/">
                                <svg class="mt-2 h-8 w-8 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                    <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-start">
                    <div class="p-4 flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                        <img src="content/foto_partner/partner4.png" alt="HOK Ace Community" height="200"
                            width="200">
                    </div>
                    <div class="w-full sm:w-auto">
                        <div class="box-content h-auto">
                            <p class="m-5 text-sm sm:text-lg text-gray-500">
                                ACE Community adalah sebuah platform yang disediakan oleh official H.O.K Indonesia yang
                                ditujukan untuk mendukung local community dan campus community di seluruh Indonesia. Tujuan
                                utama dari ACE Community adalah untuk membangun komunitas game HOK yang bersinergi dan
                                saling mendukung di setiap daerah di Indonesia. Melalui berbagai kegiatan dan event yang
                                diadakan, ACE Community ingin menciptakan ikatan yang kuat antara para pemain, serta
                                mendorong semangat kebersamaan dan sportivitas dalam bermain game. Dengan demikian, ACE
                                Community tidak hanya menjadi tempat berkumpulnya para pemain game HOK, tetapi juga menjadi
                                sarana untuk membangun hubungan yang harmonis dan saling menginspirasi antar komunitas game
                                di Indonesia.
                            </p>
                        </div>
                        <hr class="border-t border-gray-300 mb-2">
                        <div class="flex justify-start space-x-3">
                            <a href="https://www.instagram.com/honorofkings.indonesia/" target="_blank">
                                <svg class="mt-2 ml-4 h-8 w-8 text-gray-900" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8
                                                     26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7
                                                     67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a href="https://hokacecommunity.id/">
                                <svg class="mt-2 h-8 w-8 text-gray-900" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                    <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
