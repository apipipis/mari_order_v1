<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>
  <title>Toko Budi</title>
  <style>
   .carousel {
    position: relative;
    overflow: hidden;
   }

   .carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
    max-height: 300px;
   }

   .carousel-item {
    min-width: 100%;
    box-sizing: border-box;
   }

   .carousel-control-prev,
   .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px;
    cursor: pointer;
   }

   .carousel-control-prev {
    left: 10px;
   }

   .carousel-control-next {
    right: 10px;
   }
   .carousel-pagination {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel-pagination-button {
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 50%;
}

.carousel-pagination-button:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.carousel-pagination-dots {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 20px;
}

.carousel-pagination-dot {
  background-color: #fff;
  border: none;
  padding: 10px;
  border-radius: 50%;
  cursor: pointer;
  margin: 0 5px;
}

.carousel-pagination-dot.active {
  background-color: #333;
}

.carousel-pagination-dot:hover {
  background-color: #ccc;
}

  </style>
 </head>
 <body class="bg-blue-100 font-montserrat">
  <!-- Header -->
  <header class="bg-blue-200 p-4 flex justify-between items-center">
   <div class="flex items-center">
   </div>
   <nav class="flex items-center space-x-4">
    <a class="text-blue-900" href="#">
     Beranda
    </a>
    <a class="text-blue-900" href="#">
     Produk
    </a>
    <a class="text-blue-900" href="#">
     Tentang Kami
    </a>
    <a class="text-blue-900" href="#">
     Kontak
    </a>
    <i class="fas fa-search text-blue-900">
    </i>
    <i class="fas fa-shopping-cart text-blue-900">
    </i>
    <div class="hidden md:flex space-x-8">
        <a href="/login" class="bg-orange-600 hover:bg-orange-400 text-white font-bold py-2 px-4  rounded-full">Masuk</a>
        <a href="/register" class="bg-orange-600 hover:bg-orange-400 text-white font-bold py-2 px-4  rounded-full">Daftar</a>
    </div>
   </nav>
  </header>
  <!-- Main Banner Carousel -->
  <section class="carousel relative">
   <div class="carousel-inner">
    <div class="carousel-item">
     <img alt="Main Banner 1" class="w-full" height="100" src="img/scenery3.jpg" width="1920"/>
    </div>
    <div class="carousel-item">
     <img alt="Main Banner 2" class="w-full" height="100" src="img/scenery5.jpg" width="1920"/>
    </div>
    <div class="carousel-item">
     <img alt="Main Banner 3" class="w-full" height="100" src="img/scenery10.jpg" width="1920"/>
    </div>
   </div>
   <div class="carousel-control-prev" onclick="prevSlide()">
    <i class="fas fa-chevron-left">
    </i>
   </div>
   <div class="carousel-control-next" onclick="nextSlide()">
    <i class="fas fa-chevron-right">
    </i>
   </div>
   <div class="carousel-pagination">
    <button class="carousel-pagination-button" onclick="prevSlide()">
      <i class="fas fa-chevron-left"></i>
    </button>
    <div class="carousel-pagination-dots">
      <button class="carousel-pagination-dot active" onclick="showSlide(0)"></button>
      <button class="carousel-pagination-dot" onclick="showSlide(1)"></button>
      <button class="carousel-pagination-dot" onclick="showSlide(2)"></button>
    </div>
    <button class="carousel-pagination-button" onclick="nextSlide()">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>
  </section>
  <!-- Features -->
  <section class="bg-white py-4 flex flex-col md:flex-row justify-around items-center">
   <div class="text-center mb-4 md:mb-0">
    <i class="fas fa-truck text-3xl">
    </i>
    <p>
     Pengiriman Mudah dan Cepat
    </p>
   </div>
   <div class="text-center mb-4 md:mb-0">
    <i class="fas fa-star text-3xl">
    </i>
    <p>
     Kualitas Terbaik
    </p>
   </div>
   <div class="text-center">
    <i class="fas fa-box text-3xl">
    </i>
    <p>
     Tersedia Banyak Produk
    </p>
   </div>
  </section>
  <!-- Product Collections -->
  <section class="py-8">
   <div class="container mx-auto">
    <h2 class="text-xl font-bold mb-4">
     Koleksi Produk Unggulan
    </h2>
    <div class="bg-blue-300 p-4 rounded-lg flex items-center">
     <i class="fas fa-chevron-left text-2xl">
     </i>
     <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-4 mx-4">
      <div class="bg-blue-200 p-4 rounded-lg text-center">
       <img alt="Udang + Jus Lemon" class="mx-auto mb-2 rounded-lg" height="100" src="https://storage.googleapis.com/a1aa/image/xafmNIloYZTekEmIzJrbMTf4uUwu7PWsyfR7vpjve4dy7X0cC.jpg" width="100"/>
       <p>
        Udang + Jus Lemon
       </p>
       <p class="text-red-500">
        Rp. 30.000
       </p>
      </div>
      <div class="bg-blue-200 p-4 rounded-lg text-center">
       <img alt="Donat + Es Coklat" class="mx-auto mb-2 rounded-sm" height="100" src="https://storage.googleapis.com/a1aa/image/rOX8rBenQXSFdClAelQITxld26uK6eomRwp0Pt7jklYyeLaOB.jpg" width="100"/>
       <p>
        Donat + Es Coklat
       </p>
       <p class="text-red-500">
        Rp. 40.000
       </p>
      </div>
      <div class="bg-blue-200 p-4 rounded-lg text-center">
       <img alt="Ramen + Coca Cola" class="mx-auto mb-2 rounded-lg" height="100" src="https://storage.googleapis.com/a1aa/image/KXLY0BZWj0LKMhCcOvzuMiKfqNKraUJzE9yI6LzIEYRwfimTA.jpg" width="100"/>
       <p>
        Ramen + Coca Cola
       </p>
       <p class="text-red-500">
        Rp. 40.000
       </p>
      </div>
     </div>
     <i class="fas fa-chevron-right text-2xl">
     </i>
    </div>
   </div>
  </section>
  <!-- Latest and Best Selling Products -->
  <section class="py-8">
   <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    <div>
     <h2 class="text-xl font-bold mb-4">
      Produk Terbaru
     </h2>
     <div class="bg-blue-300 p-4 rounded-lg">
      <div class="flex justify-between items-center mb-4">
       <h3 class="text-lg font-bold">
        Lihat semua
       </h3>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
       <div class="bg-blue-200 p-4 rounded-lg text-center">
        <img alt="Udang + Jus Lemon" class="mx-auto mb-2" height="100" src="https://storage.googleapis.com/a1aa/image/xafmNIloYZTekEmIzJrbMTf4uUwu7PWsyfR7vpjve4dy7X0cC.jpg" width="100"/>
        <p>
         Udang + Jus Lemon
        </p>
        <p class="text-red-500">
         Rp. 30.000
        </p>
       </div>
       <div class="bg-blue-200 p-4 rounded-lg text-center">
        <img alt="Donat + Es Coklat" class="mx-auto mb-2" height="100" src="https://storage.googleapis.com/a1aa/image/rOX8rBenQXSFdClAelQITxld26uK6eomRwp0Pt7jklYyeLaOB.jpg" width="100"/>
        <p>
         Donat + Es Coklat
        </p>
        <p class="text-red-500">
         Rp. 40.000
        </p>
       </div>
      </div>
     </div>
    </div>
    <div>
     <h2 class="text-xl font-bold mb-4">
      Produk Terlaris
     </h2>
     <div class="bg-blue-300 p-4 rounded-lg">
      <div class="flex justify-between items-center mb-4">
       <h3 class="text-lg font-bold">
        Lihat semua
       </h3>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
       <div class="bg-blue-200 p-4 rounded-lg text-center">
        <img alt="Udang + Jus Lemon" class="mx-auto mb-2" height="100" src="https://storage.googleapis.com/a1aa/image/xafmNIloYZTekEmIzJrbMTf4uUwu7PWsyfR7vpjve4dy7X0cC.jpg" width="100"/>
        <p>
         Udang + Jus Lemon
        </p>
        <p class="text-red-500">
         Rp. 30.000
        </p>
       </div>
       <div class="bg-blue-200 p-4 rounded-lg text-center">
        <img alt="Donat + Es Coklat" class="mx-auto mb-2" height="100" src="https://storage.googleapis.com/a1aa/image/rOX8rBenQXSFdClAelQITxld26uK6eomRwp0Pt7jklYyeLaOB.jpg" width="100"/>
        <p>
         Donat + Es Coklat
        </p>
        <p class="text-red-500">
         Rp. 40.000
        </p>
       </div>
       <div class="bg-blue-200 p-4 rounded-lg text-center">
        <img alt="Udang + Jus Lemon" class="mx-auto mb-2" height="100" src="https://storage.googleapis.com/a1aa/image/xafmNIloYZTekEmIzJrbMTf4uUwu7PWsyfR7vpjve4dy7X0cC.jpg" width="100"/>
        <p>
         Udang + Jus Lemon
        </p>
        <p class="text-red-500">
         Rp. 30.000
        </p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- About Section -->
  <section class="py-8">
   <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="text-center">
     <img alt="Chef Illustration" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/252IPiW5PpY5E9gw6YoSdxhhKIpFMEEDPZDwU5XJczQ3vo5E.jpg" width="100"/>
     <blockquote class="text-lg font-bold">
      “Nikmati Keajaiban Kuliner dengan Chef Profesional!”
     </blockquote>
     <p>
      Restoran “Zona Food” telah hadir sejak tahun 1999. Chef kami telah menyempurnakan seni memasak selama bertahun-tahun.
     </p>
    </div>
    <div class="text-center">
     <img alt="Hygiene Illustration" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Y2XXgaJjNZqlONeBNL79rGrqJOdszBviqLyZ81wfrqLXfFNnA.jpg" width="100"/>
     <h3 class="text-lg font-bold">
      Kehigienisan Produk
     </h3>
     <p>
      Selalu memastikan Produk selalu dalam kondisi higienis untuk hidup yang lebih sehat
     </p>
    </div>
    <div class="text-center">
     <img alt="Recycling Illustration" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/1JMS2dBE2WKBCt5LyuMQUvPoOOp4Avf22BYntxgMazKtfimTA.jpg" width="100"/>
     <h3 class="text-lg font-bold">
      Produk Daur ulang
     </h3>
     <p>
      Setiap produk kami dibuat dari bahan-bahan yang dapat didaur ulang, mengurangi limbah dan membantu melestarikan bumi.
     </p>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-blue-200 py-4">
   <div class="container mx-auto text-center">
    <p class="mb-2">
     Kontak
    </p>
    <p>
     Email: helpmariorder.id@gmail.com
    </p>
    <div class="flex justify-center space-x-4 mt-4">
     <a href="#">
      <i class="fab fa-instagram text-2xl">
      </i>
     </a>
     <a href="#">
      <i class="fab fa-tiktok text-2xl">
      </i>
     </a>
    </div>
    <p class="mt-4">
     Copyright © 2024
    </p>
   </div>
  </footer>
  <script>
   let currentSlide = 0;

   function updatePaginationDot() {
  const dots = document.querySelectorAll('.carousel-pagination-dot');
  dots.forEach((dot, index) => {
    if (index === currentSlide) {
      dot.classList.add('active');
    } else {
      dot.classList.remove('active');
    }
  });
}
function showSlide(index) {
  const slides = document.querySelectorAll('.carousel-item');
  if (index >= slides.length) {
    currentSlide = 0;
  } else if (index < 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide = index;
  }
  const offset = -currentSlide * 100;
  document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
  updatePaginationDot(); // Call the updated function
}
let timerId = null;

function startTimer() {
  timerId = setInterval(nextSlide, 10000); // Ganti halaman setiap 3 detik
}

function stopTimer() {
  clearInterval(timerId);
}

// Mulai timer ketika halaman dimuat
document.addEventListener('DOMContentLoaded', startTimer);

// Berhenti timer ketika pengguna mengklik tombol navigasi
document.querySelectorAll('.carousel-pagination-button').forEach((button) => {
  button.addEventListener('click', stopTimer);
});

// Mulai timer kembali ketika pengguna mengklik tombol navigasi
document.querySelectorAll('.carousel-pagination-button').forEach((button) => {
  button.addEventListener('click', () => {
    startTimer();
  });
});

let isTransitioning = false;

function nextSlide() {
  if (isTransitioning) return; // If the carousel is already transitioning, do nothing
  isTransitioning = true;
  showSlide(currentSlide + 1);
  updatePaginationDot();
  setTimeout(() => {
    isTransitioning = false; // Reset the flag after the transition is complete
  }, transitionDelay);
  startTimer(); // Restart the timer with the updated delay
}

function prevSlide() {
  if (isTransitioning) return; // If the carousel is already transitioning, do nothing
  isTransitioning = true;
  showSlide(currentSlide - 1);
  updatePaginationDot();
  setTimeout(() => {
    isTransitioning = false; // Reset the flag after the transition is complete
  }, transitionDelay);
  startTimer(); // Restart the timer with the updated delay
}

   document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
   });
  </script>
 </body>
</html>