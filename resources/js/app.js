import './bootstrap';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';


document.addEventListener("DOMContentLoaded", function() {
  const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',  // Pengaturan untuk geser horizontal
    loop: true,               // Looping slide
    pagination: {
      el: '.swiper-pagination',
      clickable: true,        // Membuat pagination bisa diklik
    },
    navigation: {
      nextEl: '.swiper-button-next', // Tombol navigasi next
      prevEl: '.swiper-button-prev', // Tombol navigasi prev
    },
    autoplay: {
      delay: 2500,             // Durasi slide otomatis
      disableOnInteraction: false, // Tetap autoplay meski ada interaksi
    }
  });
});

