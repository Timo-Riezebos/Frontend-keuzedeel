import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import { Navigation, Pagination } from 'swiper/modules';

new Swiper('.swiper', {
  modules: [Navigation, Pagination],
  slidesPerView: 3, // aantal slides tegelijk
  spaceBetween: 20, // ruimte tussen slides
  loop: true,
  navigation: true,
  pagination: {
    clickable: true,
  },
});
