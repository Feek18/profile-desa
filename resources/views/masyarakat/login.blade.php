<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Login Page | Administrator & Staff</title>
    {{-- logo --}}
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="bg-cover object-cover"
    style="background-image: url('https://img.freepik.com/free-photo/green-landscape-with-mountain_181624-10229.jpg?t=st=1721143672~exp=1721147272~hmac=706521f787e4bd733a7c13d7392d4cdb9fc198f91c1478d7047c27a97fcb9cf2&w=1380')">

    <section>
        <div class="container mx-auto">
            <div class="flex items-center justify-center min-h-screen shadow-md">
                <div class="bg-white rounded-lg shadow-lg md:w-3/4 lg:w-1/2 xl:w-1/3">
                    <div class="text-white text-center bg-cover bg-center object-cover py-4 bg-opacity-50"
                        style="background-image: url('https://img.freepik.com/free-photo/beautiful-horizontal-shot-forest-with-green-trees-daytime_181624-4297.jpg?t=st=1721143979~exp=1721147579~hmac=9fe2feec492ce3457a5d51a07571e5da7a053b70a0804ec5374d90ae7f8dbfc9&w=996')">
                        <div class="flex items-center justify-center">
                            <img class="h-16 w-auto" src="{{ asset('img/logo.png') }}" alt="Your Company">
                        </div>
                        <h1 class="text-3xl font-bold">Desa Kedang murung</h1>
                        <p>Welcome back to Website Desa Kedang murung</p>
                    </div>
                    <div class="p-8 md:p-12">
                        <h1 class="text-3xl font-bold mb-2">Login Form</h1>
                        <p class="text-slate-500 mb-6">Login to your account to get access easily</p>
                      <form action="{{ route('loginMasyarakat') }}" method="POST">
                        @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="username">Nik</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="text" placeholder="Masukkan Nik anda">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="password">Password</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="password" type="password" placeholder="Masukkan password anda">
                            </div>
                            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded w-full">Login</button>
                            <p class="text-center mt-4">Belum punya akun?
                                <a class="no-underline font-bold text-sky-500" href="{{ route('registerMasyarakat') }}">Daftar disini</a>
                            </p>

                             <p class="text-center mt-4">
                                <a class="no-underline font-bold text-sky-500" href="{{ route('loginAdmin') }}">Login petugas/rt</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
