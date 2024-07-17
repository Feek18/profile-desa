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
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg shadow-lg md:w-3/4 lg:w-1/2 xl:w-1/3">
                    <div class="p-6 md:p-8">
                        <h1 class="text-3xl font-bold mb-2">Registration Form</h1>
                        <p class="text-slate-500 mb-6">Please fill in this form to create an account</p>
                        <form action="{{ route('registerMasyarakat') }}" method="POST">
                         @csrf
                            <div class="flex items-center gap-4">
                                <div class="flex-1 mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fullname">Nama
                                        Lengkap</label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="fullname" type="text" placeholder="Masukkan nama lengkap anda">
                                </div>
                                
                                <div class="flex-1 mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                        for="email">Nik</label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" type="text" placeholder="Masukkan Nik anda">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="username">Email</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username" type="Email" placeholder="Masukkan user anda">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="no_telp">No Telp</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="no_telp" type="number" placeholder="Masukkan nomor telepon anda">
                            </div>
                           
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2"
                                    for="password">Password</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="password" type="password" placeholder="Masukkan password anda">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">Foto</label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="foto" type="file">
                            </div>
                            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded w-full">SIgnup</button>
                            <p class="text-center mt-4">Sudah punya akun?
                                <a class="no-underline font-bold text-sky-500" href="{{ route('loginAdmin') }}">Masuk
                                    disini</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
