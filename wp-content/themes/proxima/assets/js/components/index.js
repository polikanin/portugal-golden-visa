import Accordion from './Accordion/Accordion.vue';
import Icon from './Icon/Icon.vue';
import Loader from "./Loader/Loader.vue";
import Modal from "./Modal/Modal.vue";
import VerticalX3Slider from "./VerticalX3Slider/VerticalX3Slider.vue";
import HorizontalX3Slider from "./HorizontalX3Slider/HorizontalX3Slider.vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import CustomScrollbar from 'custom-vue-scrollbar';

let Components

Components = {
    install(Vue) {
        Vue.component('vp-accordion', Accordion);
        Vue.component('vp-icon', Icon)
        Vue.component('vp-loader', Loader)
        Vue.component('vp-modal', Modal)
        Vue.component('swiper', Swiper)
        Vue.component('swiper-slide', SwiperSlide)
        Vue.component('custom-scrollbar', CustomScrollbar)
        Vue.component('vertical-x3-slider', VerticalX3Slider)
        Vue.component('horizontal-x3-slider', HorizontalX3Slider)

    }
};

export default Components;
