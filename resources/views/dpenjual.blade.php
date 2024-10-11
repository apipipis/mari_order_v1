<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjual</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-blue-200 p-4">
        <div class="container max-w-screen-lg mx-auto flex justify-between items-center">
            <a href="/"><img src="img/logo.png" width="200" height="150"></a>
            <nav class="space-x-4 pl-12">
                <a href="#products" class="text-blue-600 hover:text-gray-200">Dashboard</a>
                <a href="#orders" class="text-blue-600 hover:text-gray-200">Produk</a>
                <a href="#settings" class="text-blue-600 hover:text-gray-200">Ekspedisi</a>
                <a href="#settings" class="text-blue-600 hover:text-gray-200">Lainnya</a>
            </nav>
            <img src="{{ asset('img/sherk.jpg') }}" alt="Profile" class="w-16 h-16 rounded-full object-cover">
        </div>
    </header>

    <!-- Main Content -->
    <main class="container max-w-screen-lg mx-auto py-12">
        <!-- Section untuk Statistik -->
        <section class="mb-4">
            <h2 class="text-xl font-semibold mb-4">Dashboard Penjualan</h2>
            <div class="grid grid-cols-4 gap-8">
                <!-- Bagian Grafik Penjualan -->
                <div class="col-span-2 bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-gray-600 font-medium mb-4 text-center">Grafik Penjualan</h3>
                    <!-- Tempatkan kode atau iframe grafik di sini -->
                    <div class="h-64 flex items-center justify-center bg-blue-100 rounded-lg">
                        <!-- Ini adalah placeholder untuk grafik -->
                        <p class="text-gray-500">Grafik Penjualan</p>
                    </div>
                </div>
        
                <!-- Bagian Statistik Penjualan -->
                <div class="col-span-2 grid grid-cols-2 gap-4">
                    <!-- Flexbox Statistik Penjualan -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Pendapatan Bulanan</h3>
                        <p class="text-2xl font-bold text-blue-600">Rp 12.000.000</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Jumlah Pesanan</h3>
                        <p class="text-2xl font-bold text-blue-600">120</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Produk Terjual</h3>
                        <p class="text-2xl font-bold text-blue-600">85</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Pengunjung</h3>
                        <p class="text-2xl font-bold text-blue-600">3500</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Ulasan</h3>
                        <p class="text-2xl font-bold text-blue-600">45</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Retur Produk</h3>
                        <p class="text-2xl font-bold text-blue-600">5</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Feedback Positif</h3>
                        <p class="text-2xl font-bold text-blue-600">90%</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Laba Bersih</h3>
                        <p class="text-2xl font-bold text-blue-600">Rp 8.000.000</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Jumlah Produk</h3>
                        <p class="text-2xl font-bold text-blue-600">150</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Produk Tersedia</h3>
                        <p class="text-2xl font-bold text-blue-600">145</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Omset</h3>
                        <p class="text-2xl font-bold text-blue-600">Rp 20.000.000</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between">
                        <h3 class="text-gray-600 font-medium">Pesanan Kembali</h3>
                        <p class="text-2xl font-bold text-blue-600">30</p>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Section untuk Produk -->
        <section id="products" class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Produk Terlaris</h2>
            <div class="bg-blue-800 p-6 rounded-lg shadow-md">
                <div class="flex space-x-4">
                    <!-- Produk 1 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 1" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Nanas</h3>
                            <p class="text-blue-600 font-bold">Dibeli : 584</p>
                        </div>
                    </div>
        
                    <!-- Produk 2 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 2" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Apel</h3>
                            <p class="text-blue-600 font-bold">Dibeli : 489</p>
                        </div>
                    </div>
        
                    <!-- Produk 3 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 3" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Jeruk</h3>
                            <p class="text-blue-600 font-bold">Dibeli : 456</p>
                        </div>
                    </div>
        
                    <!-- Produk 4 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 4" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Kelapa</h3>
                            <p class="text-blue-600 font-bold">Dibeli : 361</p>
                        </div>
                    </div>
        
                    <!-- Produk 5 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 5" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Mangga</h3>
                            <p class="text-blue-600 font-bold">Dibeli : 318</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="products" class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Produk Paling Banyak Dilihat</h2>
            <div class="bg-blue-800 p-6 rounded-lg shadow-md">
                <div class="flex space-x-4">
                    <!-- Produk 1 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 1" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Nanas</h3>
                            <p class="text-blue-600 font-bold">Dilihat : 584</p>
                        </div>
                    </div>
        
                    <!-- Produk 2 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 2" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Apel</h3>
                            <p class="text-blue-600 font-bold">Dilihat : 489</p>
                        </div>
                    </div>
        
                    <!-- Produk 3 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 3" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Jeruk</h3>
                            <p class="text-blue-600 font-bold">Dilihat : 456</p>
                        </div>
                    </div>
        
                    <!-- Produk 4 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 4" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Kelapa</h3>
                            <p class="text-blue-600 font-bold">Dilihat : 361</p>
                        </div>
                    </div>
        
                    <!-- Produk 5 -->
                    <div class="rounded-lg overflow-hidden shadow-lg bg-gray-100 w-48 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <img src="img/sherk.jpg" alt="Nama Produk 5" class="w-full h-32 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-gray-800 font-semibold mb-2">Mangga</h3>
                            <p class="text-blue-600 font-bold">Dibeli : 318</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @vite('resources/js/app.js')
</body>
</html>
