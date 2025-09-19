import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import { Navigation, Pagination } from 'swiper/modules';

new Swiper('.swiper', {
  modules: [Navigation, Pagination],
  slidesPerView: 3, // standaard: 3 slides
  spaceBetween: 20,
  loop: true,
  navigation: true,
  pagination: {
    clickable: true,
  },
  breakpoints: {
      // tot 640px: 1 foto
      0: {
        slidesPerView: 1,
      },
      // vanaf 640px: 2 foto's
      375: {
        slidesPerView: 2,
      },
      // vanaf 1024px: 3 foto's
      768: {
        slidesPerView: 3,
      }
  }
});
