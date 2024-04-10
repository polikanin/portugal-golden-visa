import Accordion from './Accordion/Accordion.vue';
import Icon from './Icon/Icon.vue';
import Loader from "./Loader/Loader.vue";
import Modal from "./Modal/Modal.vue";
import VerticalSlider from "./VerticalSlider/VerticalSlider.vue";
import HorizontalX3Slider from "./HorizontalX3Slider/HorizontalX3Slider.vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import CustomScrollbar from 'custom-vue-scrollbar';

let Components

Components = {
    install(Vue) {
        Vue.component('se-accordion', Accordion);
        Vue.component('se-icon', Icon)
        Vue.component('se-loader', Loader)
        Vue.component('se-modal', Modal)
        Vue.component('swiper', Swiper)
        Vue.component('swiper-slide', SwiperSlide)
        Vue.component('custom-scrollbar', CustomScrollbar)
        Vue.component('vertical-slider', VerticalSlider)
        Vue.component('horizontal-x3-slider', HorizontalX3Slider)

    }
};

export default Components;
