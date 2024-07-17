<nav>
    <div class="mx-auto max-w-screen-2xl px-4 py-4">
        <div class="relative h-14">
            <div class="flex justify-between items-center gap-3">
                <img class="h-12 w-auto hidden md:block lg:block" src="{{ asset('img/logo.png') }}" alt="Your Company">
                <div class="mr-auto">
                    <h3 class="text-[#282828] text-2xl mb-0 uppercase font-semibold">Website Resmi Desa Kertamulya
                    </h3>
                    <p class="text-slate-500 text-[14px] font-bold">Kabupaten Bandung Barat, Jawa Barat</p>
                </div>
                <p class="text-[#282828] text-[14px] hidden lg:block"><i class="fa-solid fa-envelope mr-1"></i> pemdes@kertamulya-padalarang.desa.id</p>
            </div>
        </div>
    </div>
</nav>
<nav class="bg-[#228B22] relative z-20">
    <div class="mx-auto max-w-screen-2xl px-4">
        <div class="relative flex justify-between h-16 items-center">
            <!-- Desktop Menu -->
            <div class="hidden sm:flex space-x-4">
                <button id="dropdownProfileButton" data-dropdown-toggle="dropdownProfile" data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Profil Desa
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownProfile"
                    class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownProfileButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah
                                Desa</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                dan Misi</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pemerintahan
                                Desa</a>
                        </li>
                    </ul>
                </div>
                <button id="dropdownDataButton" data-dropdown-toggle="dropdownData" data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Data Desa
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownData"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDataButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data
                                Penduduk
                                Desa</a>
                        </li>
                    </ul>
                </div>
                <button id="dropdownServiceButton" data-dropdown-toggle="dropdownService" data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Layanan Desa
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownService"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownServiceButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pelayanan
                                Administrasi</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                Kesehatan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                Kependudukan</a>
                        </li>
                    </ul>
                </div>
                <button id="dropdownActivityButton" data-dropdown-toggle="dropdownActivity"
                    data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Kegiatan Desa
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownActivity"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAvtivityButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dokumentasi
                                Kegiatan Desa</a>
                        </li>
                    </ul>
                </div>
                <button id="dropdownAuthButton" data-dropdown-toggle="dropdownAuth" data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Autentikasi
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownAuth"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAuthButton">
                        <li>
                            <a href="{{ route('loginAdmin') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Administrator/Staff</a>
                        </li>
                        <li>
                            <a href="{{ route('loginMasyarakat') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Masyarakat</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-between items-center gap-x-6">
                <img class="h-10 w-auto md:hidden lg:hidden" src="{{ asset('img/logo.png') }}" alt="Your Company">
                <div class="absolute inset-y-0 right-0 flex justify-between items-center gap-x-3">
                    <div class="flex items-center gap-x-2">
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block py-2 px-4 rounded-md"
                            placeholder="Cari artikel disini">
                        <button class="bg-green-400 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <!-- Mobile menu button -->
                    <button type="button" id="menu-button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white sm:hidden"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
        <hr class="my-2">
        <div class="flex sm:hidden flex-col py-3">
            <div class="relative">
                <button id="mobileDropdownProfileButton" data-dropdown-toggle="mobileDropdownProfile"
                    data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-between w-full">
                    Profil Desa
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownProfile"
                    class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/2 mt-1 origin-top-left">
                    <ul class="py-2 text-sm text-gray-700">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah
                                Desa</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                dan Misi</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pemerintahan
                                Desa</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Menu Data Desa -->
            <div class="relative">
                <button id="mobileDropdownDataButton" data-dropdown-toggle="mobileDropdownData"
                    data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-between w-full mt-1">
                    Data Desa
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownData"
                    class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/2 origin-top-left">
                    <ul class="py-2 text-sm text-gray-700">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data
                                Penduduk Desa</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Menu Layanan Desa -->
            <div class="relative">
                <button id="mobileDropdownServiceButton" data-dropdown-toggle="mobileDropdownService"
                    data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-between w-full mt-1">
                    Layanan Desa
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownService"
                    class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/2 origin-top-left">
                    <ul class="py-2 text-sm text-gray-700">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pelayanan
                                Administrasi</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                Kesehatan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                Kependudukan</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Menu Kegiatan Desa -->
            <div class="relative">
                <button id="mobileDropdownActivityButton" data-dropdown-toggle="mobileDropdownActivity"
                    data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-between w-full mt-1">
                    Kegiatan Desa
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownActivity"
                    class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/2 origin-top-left">
                    <ul class="py-2 text-sm text-gray-700">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dokumentasi
                                Kegiatan Desa</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Menu Autentikasi -->
            <div class="relative">
                <button id="mobileDropdownAuthButton" data-dropdown-toggle="mobileDropdownAuth"
                    data-dropdown-trigger="hover"
                    class="text-white hover:bg-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-between w-full mt-1">
                    Autentikasi
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownAuth"
                    class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/2 origin-top-left">
                    <ul class="py-2 text-sm text-gray-700">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Administrator</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Staff</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
