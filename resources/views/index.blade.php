<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kertamulya | Website Profile</title>

    {{-- logo --}}
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <style>
        #mobile-menu {
            display: none;
        }
        #mobile-menu.show {
            display: block;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="bg-[#f8f8f8]">

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- hero --}}
    <section>
        <div class="container mx-auto">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-[550px] z-10">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-photo/hut-rice-field-thailand_1150-10753.jpg?t=st=1721128447~exp=1721132047~hmac=14f97fdcf754a6c14897a1b2099c07800bc6e440d6b0552318b7a5bfbf41c6dd&w=996"
                            class="absolute block w-full xl:w-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover bg-center object-cover"
                            alt="...">
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white bg-black bg-opacity-50 px-4 py-2 rounded-md text-center">
                            <h1 class="font-bold text-xl lg:text-4xl mb-2">Selamat Datang di Desa Kertamulya</h1>
                            <p class="text-sm lg:text-lg font-normal">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Alias a iure, fuga inventore porro deleniti sit sunt reprehenderit voluptatum est?</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-photo/street-thailand-nature_1296-648.jpg?t=st=1721130488~exp=1721134088~hmac=e8299fa387db1e30dcb6489ac6d83f153e62e690d016cb3ce1a4aa3856e1165e&w=996"
                            class="absolute block w-full xl:w-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover bg-center object-cover"
                            alt="...">
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-3xl font-bold bg-black bg-opacity-50 px-4 py-2 rounded-md text-center">
                            <h1 class="font-bold text-xl lg:text-4xl mb-2">Pemandangan Alam yang Indah</h1>
                            <p class="text-sm lg:text-lg font-normal">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Alias a iure, fuga inventore porro deleniti sit sunt reprehenderit voluptatum est?</p>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-10 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    {{-- kontent dan informasi --}}
    <section>
        <div class="container mx-auto px-4 mt-12">
            <div class="flex flex-col gap-4">
                <h1 class="text-3xl font-semibold text-[#282828]">Artikel <span
                        class="font-bold text-green-500">Terbaru</span></h1>
                <hr class="border-2 w-1/2">
                <div class="flex flex-col gap-4">
                    <div class="bg-white flex flex-col lg:flex-row items-center max-w-screen-lg gap-6">
                        <img src="https://img.freepik.com/free-photo/indigenous-person-doing-daily-chores-showcasing-lifestyle_23-2149711134.jpg?t=st=1721134490~exp=1721138090~hmac=6b46c13c75eb8d8aebc232cc21e5df7e100e250a91de68f3676fd7aabbb9663e&w=996"
                            class="w-full lg:w-auto h-52 object-cover" alt="">
                        <div>
                            <h3 class="text-xl font-semibold">Kegiatan KKN oleh Beberapa Mahasiswa Tahun 2024</h3>
                            <p class="max-w-2xl mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos
                                dignissimos quis, sapiente, ea asperiores temporibus libero error reiciendis fugit
                                fugiat corrupti autem neque, quidem facere.</p>
                            <p class="text-sm text-slate-500 mb-2"><i class="fa-solid fa-calendar-days mr-3"></i> Periode
                                Juli - September 2024</p>
                        </div>
                    </div>
                    <div class="bg-white flex flex-col lg:flex-row items-center max-w-screen-lg gap-4">
                        <img src="https://img.freepik.com/free-photo/men-women-help-each-other-collect-garbage_1150-23976.jpg?t=st=1721134786~exp=1721138386~hmac=ac6632128d6013902b8a7ddf731f88c3d425c575ad9977325bef447ef5aa0064&w=996"
                            class="w-full lg:w-auto h-52 object-cover" alt="">
                        <div>
                            <h3 class="text-xl font-semibold">Kegiatan Gotong Royong Membersihkan Lingkungan</h3>
                            <p class="max-w-2xl mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos
                                dignissimos quis, sapiente, ea asperiores temporibus libero error reiciendis fugit
                                fugiat corrupti autem neque, quidem facere.</p>
                            <p class="text-sm text-slate-500 mb-2"><i class="fa-solid fa-calendar-days mr-3"></i> Periode
                                April 2024</p>
                        </div>
                    </div>
                    <div class="bg-white flex flex-col lg:flex-row items-center max-w-screen-lg gap-4">
                        <img src="https://img.freepik.com/free-photo/aerial-view-terraced-rice-fields-bali-indonesia_335224-312.jpg?t=st=1721134960~exp=1721138560~hmac=9d589e1e8ae1c401ad35630ed95463b13acf7f809cb8162bc91952a4732af237&w=996"
                            class="w-full lg:w-auto h-52 object-cover" alt="">
                        <div>
                            <h3 class="text-xl font-semibold">Sejarah Tentang Desa Kertamulya</h3>
                            <p class="max-w-2xl mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos
                                dignissimos quis, sapiente, ea asperiores temporibus libero error reiciendis fugit
                                fugiat corrupti autem neque, quidem facere.</p>
                            <p class="text-sm text-slate-500 mb-2"><i class="fa-solid fa-calendar-days mr-3"></i> Periode
                                Januari - Februari 2024</p>
                        </div>
                    </div>
                </div>
                <aside>

                </aside>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @include('layouts.footer')






    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script>
        // JavaScript untuk mengontrol visibilitas menu mobile
        document.getElementById('menu-button').onclick = function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('show');
        };
    </script>
</body>

</html>
