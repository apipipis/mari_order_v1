<!DOCTYPE html>
<html lang="en">
<head>
    <nav class= "fixed top-0 left-0 right-0 z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="/"><img src="img/logo.png" width="250" height="250"></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/login"
                        class="bg-orange-600 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded-full">Masuk</a>
                    <a href="/register"
                        class="bg-orange-600 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded-full">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mari Order</title>
    @vite('resources/css/app.css')
    <style>
        .custom-blue {
            background-color: #8AA9E1;
            color: white;
        }

        .custom-blue-text {
            color: #193C9A;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center"
    style="background-image: url('{{ asset('img/bgawal.png') }}'); background-size: cover; background-position: center;">

    <div class="custom-blue p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-3xl font-bold mb-6 text-center text-white">Login</h2>
        <form method="POST" action="/login">
            @csrf
            <!-- Input Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white mb-2">Email</label>
                <input id="email" name="email" type="email" required
                    class="w-full px-4 py-2 border rounded-lg text-black bg-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            </div>

            <!-- Input Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-white mb-2">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 border rounded-lg text-black bg-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            </div>

            <!-- Tombol Login -->
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-white text-blue-600 font-bold py-2 px-4 rounded-lg w-full hover:bg-blue-100">Login</button>
            </div>
        </form>

        <!-- Link Register -->
        <p class="mt-4 text-sm text-center text-white">
            Belum punya akun? <a href="/register" class="text-white underline hover:text-blue-100">Daftar di sini</a>.
        </p>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
