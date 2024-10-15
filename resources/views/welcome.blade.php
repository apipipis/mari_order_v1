<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mariorder</title>
</head>
<body> 
{{-- Navbar Start --}}
  <nav class= "bg-blue-100 shadow-md top-0 left-0 right-0 z-0">
      <div class="px-4">
        <div class="flex justify-between items-center py-4">
          <div class="flex items-center">
              <a href="/"><img src="img/logo mariorder.png" width="200" height="200"></a>
          </div>
          <div class="hidden md:flex space-x-8">
              <a href="/kontak" class="text-blue-600 hover:text-pink-100 mt-2">Kontak</a>
              <a href="/fitur" class="text-blue-600 hover:text-pink-100 mt-2">Fitur</a>
              <a href="/pusatbantuan" class="text-blue-600 hover:text-blue-100 mt-2">Pusat Bantuan</a>
              <a href="/demo"class="text-blue-600 hover:text-pink-100 mt-2">Demo</a>
            <a href="/masuk" class="bg-orange-600 hover:bg-orange-400 text-white py-2 px-4 rounded-full">Masuk</a>
            <a href="/daftar" class="bg-orange-600 hover:bg-orange-400 text-white py-2 px-4 rounded-full">Daftar</a>
          </div>
        </div>
      </div>
    </nav>
{{-- Navbar End --}}

{{-- Main Start --}}
    <section id="fitur" class="flex items-left justify-left">
      <div class="max-w-screen-lg mx-auto text-left text-white px-20 py-20 grid-cols-2 grid">
          <div><h1 class="text-blue-800 text-5xl font-bold mb-4">Selamat Datang di Mari Order</h1>
              <p class="text-blue-400 text-2xl mb-10"  style="padding: 10px;"> Bisnis Anda dengan Mudah Mariorder adalah solusi terbaik untuk mengelola pesanan Anda secara efisien. Dengan fitur canggih dan antarmuka yang ramah pengguna, Anda dapat fokus pada pengembangan</p>
              
              <div class="mb-24"></div>
              <a href="/daftar" class="bg-blue-800 hover:bg-orange-400 text-white text-2xl py-3 px-10 rounded-full">Daftar Sekarang</a>
              
              <div class=" pl-5 pt-4"><img src="/img/profil.png" width="75" height="50"></div>

                <div class="flex items-center px-5 pb-2">
                    <span class="text-yellow-500 text-3xl">★</span>
                    <span class="text-yellow-500 text-3xl">★</span>
                    <span class="text-yellow-500 text-3xl">★</span>
                    <span class="text-yellow-500 text-3xl">★</span>
                    <span class="text-gray-300 text-3xl">★</span>
                    <p class="ml- text-gray-700">Dipercaya lebih dari 5++ Bisnis</p>
                </div>
        </div>
            <div><img src="img/image 1.png" alt="Foto awal landing page" width="1080"  height="1080" class="rounded-lg object-cover"></div>
        </div>
    </section>
 {{-- Main End --}}

{{-- Start --}}
  <div class="bg-blue-100">     <!--Background belakang-->
    <div id="" class="flex items-center justify-center">
      <h1 class="text-blue-800 text-6xl font-bold mb-4 py-20">Mengapa harus Mari Order?</h1>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 7fr;">
        <img src="img/manajemen.png" width="150" height="200" class="flex items-left justify-left ml-24">
        
        <div><h2 class="max-w-screen-lg mx-auto text-blue-800 text-3xl font-bold mb-4">Manajemen Pengguna</h2>
        <p class="max-w-screen-lg mx-auto text-blue-400 text-2xl mb-10" style="display: grid; grid-template-columns: 1fr 1fr;"> Bisnis Anda dengan Mudah Mariorder adalah solusi terbaik untuk mengelola pesanan Anda secara efisien. Dengan fitur canggih dan antarmuka yang ramah pengguna, Anda dapat fokus pada pengembangan</p>
        </div>
      </div>
      
      <div style="display: grid; grid-template-columns: 1fr 7fr;">
        <img src="img/keranjang.png" width="150" height="200" class="flex items-left justify-left ml-24">
        <div><h2 class="max-w-screen-lg mx-auto text-blue-800 text-3xl font-bold mb-4">Total Produk</h2>
        <p class="max-w-screen-lg mx-auto text-blue-400 text-2xl mb-10" style="display: grid; grid-template-columns: 1fr 1fr;"> Kami menawarkan berbagai produk yang dapat memenuhi kebutuhan bisnis Anda. Dari produk digital hingga fisik, semuanya tersedia di satu platform.</p>
        </div>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 7fr;">
        <img src="img/bintang.png" width="150" height="200" class="flex items-left justify-left ml-24">
        <div><h2 class="max-w-screen-lg mx-auto text-blue-800 text-3xl font-bold mb-4">Sudah Dipercaya</h2>
        <p class="max-w-screen-lg mx-auto text-blue-400 text-2xl mb-20" style="display: grid; grid-template-columns: 1fr 1fr;"> Mariorder telah dipercaya oleh ratusan bisnis di seluruh Indonesia. Kami berkomitmen untuk memberikan layanan terbaik dan mendukung pertumbuhan bisnis Anda.</p>
        </div>
      </div>
    </div>  
{{-- END --}}

{{--Start Fitur  --}}
  <div class="px-20 py-20">
    <h1 class="text-center text-6xl font-bold text-blue-800 mb-10">FITUR</h1>
  </div>
    <div class="max-w-screen-lg mx-auto">
          <section id="Fitur" class="mb-3">
                <div class="grid grid-cols-4 gap-2 h-24">
                    <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <div class="p-5 text-center">
                            <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 1</h3>
                        </div>
                    </div>

                    <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <div class="p-5 text-center">
                            <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 2</h3>
                        </div>
                    </div>

                    <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <div class="p-5 text-center">
                            <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 3</h3>
                        </div>
                    </div>

                    <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        <div class="p-5 text-center">
                            <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 4</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-screen-lg mx-auto">
        <section id="products" class="mb-3">
          <div class="grid grid-cols-4 gap-3 h-24">
              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 5</h3>
                  </div>
              </div>

              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 6</h3>
                  </div>
              </div>

              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 7</h3>
                  </div>
              </div>

              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 8</h3>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <div class="max-w-screen-lg mx-auto">
    <section id="products" class="mb-3">
      <div class="grid grid-cols-4 gap-3 h-24">
          <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
              <div class="p-5 text-center">
                  <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 9</h3>
              </div>
          </div>

          <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
              <div class="p-5 text-center">
                  <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 10</h3>
              </div>
          </div>

          <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
              <div class="p-5 text-center">
                  <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 11</h3>
              </div>
          </div>

          <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
              <div class="p-5 text-center">
                  <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 12</h3>
              </div>
          </div>
      </div>
  </div>
</section>

<div class="max-w-screen-lg mx-auto">
        <section id="products" class="mb-3">
          <div class="grid grid-cols-4 gap-3 h-24">
              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 13</h3>
                  </div>
              </div>

              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 14</h3>
                  </div>
              </div>

              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 15</h3>
                  </div>
              </div>

              <div class="rounded-full overflow-hidden shadow-lg bg-gray-100 cursor-pointer hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                  <div class="p-5 text-center">
                      <h3 class="text-gray-800 font-semibold py-5 mb-2">Fitur 16</h3>
                  </div>
              </div>
          </div>
        </section>
</div>
{{-- Fitur End --}}

{{-- Ekspedisi Start --}}
<div class="bg-blue-100 mt-24">
<section class="flex items-left justify-left">
  <div class="max-w-screen-lg mx-auto text-left text-white px-20 py-24 grid-cols-2 grid">
      <div><h1 class="text-blue-800 text-center text-6xl font-bold mb-10">Ekspedisi</h1>
          <p class="text-blue-800 font-semibold text-3xl mb-1"  style="padding: 10px;">Layanan Ekspedisi Lengkap</p>
          <p class="text-blue-400 text-2xl mb-10"  style="padding: 10px;">Kami bekerja sama dengan berbagai layanan ekspedisi terkemuka seperti JNE, J&T Express, TIKI, GO SEND, SiCepat Express, dan GrabExpress untuk memastikan Anda mendapatkan pilihan terbaik.</p>
          <p class="text-blue-800 font-semibold text-3xl mb-1"  style="padding: 10px;">Dipercaya oleh Banyak Pelanggan</p>
          <p class="text-blue-400 text-2xl mb-10"  style="padding: 10px;">Dengan Mariorder, paket Anda akan sampai tepat waktu dan dalam kondisi sempurna. Ratusan bisnis telah mempercayakan pengiriman mereka kepada kami. Bergabunglah dengan mereka dan nikmati layanan ekspedisi yang handal dan efisien.</p>
      </div>

        <div><img src="img/Gambar Ekspedisi.png" alt="Ekspedisi" width="1080" height="1080" class="rounded-lg object-cover"></div>

        <div><img src="img/Logo Ekspedisi.png" alt="Logo Ekspedisi"></div>
        
    </div>
</section>   
  </div>
{{-- Ekspedisi End --}}

{{-- Pembayaran Start --}}
  <div class="  mt-24">
    <section id="fitur" class="flex items-left justify-left">
      <div class="max-w-screen-lg mx-auto text-left text-white px-20 py-24 grid-cols-2 grid">
          <div><h1 class="text-blue-800 text-center text-6xl font-bold mb-10">Pembayaran</h1>
              <p class="text-blue-400 text-2xl mb-15" style="padding: 10px;">Dengan sistem keamanan yang canggih, setiap transaksi Anda akan diproses dengan cepat dan aman. Nikmati kemudahan berbelanja tanpa khawatir.</p>
              <p class="text-blue-400 text-2xl mb-10" style="padding: 10px;">Kami bekerja sama dengan bank-bank terkemuka di Indonesia untuk memastikan transaksi Anda berjalan lancar.</p>
          </div>
            <div><img src="img/image 2.png" alt="pembayaran" width="1080" height="1080" class="rounded-lg object-cover"></div>

            <div><img src="img/Metode Pembayaran.png" alt="Logo pembayaran" width="400" height="300"></div>
        </div>
      </section>   
      </div>
{{-- Pembayaran End  --}}

{{-- Review Start --}}

<div class="bg-blue-100 mt-24 grid grid-cols-3" style="justify-items: 10px">
            <div class="cols-span-1">
                <img src="/img/profil.png" style="margin-left:41%" class="pt-10" width="200" >
                <h2 class="font-semibold text-xl" style="margin-left:50%">Owner John</h2>
                <p class="pb-28 text-xl font-semibold"style="margin-left:50%">Barbershop</p>
            </div>
             <div class="col-span-2 bg-blue-100 pt-32">
                <h2 class="text-left text-3xl font-bold mb-1">John Ariantop</h2>`

                <div class="flex items-center px-54 pb-2 text-2xl">
                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>
                    <span class="text-gray-300">★</span>
                    <span class="ml-2 text-gray-700">4.0</span>
                </div>
                
                <p class="text-3xl ">Sangat fast respons dan bertanggung jawab terhadap keluhan user,baik pada office hour maupun diluar bahkan tengah malam dan subuh. Recommended banget, semoga terus dapat memberikan karya bagi negeri.</p>
            </div>
</div>
{{-- Review End --}}

{{-- Review 1 Start --}}
<div class="bg-blue-100 mt-10 grid grid-cols-3" style="justify-items: 10px">
            <div class="cols-span-1">
                <h2 class="text-center font-semibold text-5xl mt-20 mr-20" style="margin-left:32%">Tinggalkan Review Disini</h2>
            </div>
        <div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-black mb-2 mt-10">Nama</label>
                <input id="nama" name="nama" type="nama" required class="w-full px-4 py-2 border rounded-lg text-black bg-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Silahkan Isi Disini"></div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-black mb-2 mt-1">Sebagai</label>
                <input id="nama" name="nama" type="nama" required class="w-full px-4 py-2 border rounded-lg text-black bg-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Silahkan Isi Disini"></div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-black mb-2 mt-1">Pesan</label>
                <input id="nama" name="nama" type="nama" required class="w-full px-4 py-2 pb-20 border rounded-lg text-black bg-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Tuliskan Pesan Disini"></div>
            
                <div><button class="bg-blue-800 hover:bg-orange-400 text-white text-2xl py-3 px-10  rounded-full">Kirim</button></div>
        </div>
            <div class="flex items-center px-5 pb-2 text-8xl">
                <span class="text-gray-300 hover:text-yellow-500 cursor-pointer transition duration-200">★</span>
                <span class="text-gray-300 hover:text-yellow-500 cursor-pointer transition duration-200">★</span>
                <span class="text-gray-300 hover:text-yellow-500 cursor-pointer transition duration-200">★</span>
                <span class="text-gray-300 hover:text-yellow-500 cursor-pointer transition duration-200">★</span>
                <span class="text-gray-300 hover:text-yellow-500 cursor-pointer transition duration-200">★</span>
            </div>
            <div class="pb-10"></div>
</div>        
{{-- Review 1 End --}}

{{-- Akhirnya --}}
<div class="bg-blue-100 relative w-200">
    <img src="img/Ellipse 1.png" alt="Deskripsi Gambar" class="w-full h-auto">
    <div class="absolute inset-0 flex items-center justify-center">
        <div>
            <h1 class="text-white text-bold text-center text-4xl pb-3">HUBUNGI KAMI:</h1>   
            <p class="text-white text-center">Copyright © 2024</p>

            <div class="flex flex-row px-24 pt-5">
                <a href="https://www.instagram.com/mariorderid/">
                <img src="img/instagram.png" width="30" class="mr-3"></a>

                <a href="https://www.tiktok.com/@mariorderid">
                <img src="img/tiktok.png" width="30"></a>
        
                <a href="https://www.facebook.com/profile.php?id=61566173520503">
                <img src="img/facebook.png" width="30" class="ml-3"></a>
            </div>
        </div>
        
    </div>   
              
</div>