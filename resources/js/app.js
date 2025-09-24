import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import { Navigation, Pagination } from 'swiper/modules';

new Swiper('.swiper', {
  modules: [Navigation, Pagination],
  slidesPerView: 3,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
      0: {
        slidesPerView: 1,
      },
      375: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
  }
});
