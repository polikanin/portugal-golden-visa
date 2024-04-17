<template>
    <div class="vp-testimonials-block--head">
        <h1 class="vp-title">
            {{ title }}
        </h1>

        <div class="vp-testimonials-block--ctrl">
            <div class="vp-swiper-button-prev">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0601 13.2787L5.71339 8.93208C5.20006 8.41875 5.20006 7.57875 5.71339 7.06542L10.0601 2.71875" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="vp-swiper-pagination"></div>
            <div class="vp-swiper-button-next">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.93994 13.2787L10.2866 8.93208C10.7999 8.41875 10.7999 7.57875 10.2866 7.06542L5.93994 2.71875" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
    <div class="vp-horizontal--swiper" v-if="slides">
        <swiper
            :slides-per-view="3"
            :spaceBetween="32"
            @swiper="getRef"
            @slide-change="onSlideChange"
            :modules="modules"
            :navigation="{
        nextEl: '.vp-swiper-button-next',
        prevEl: '.vp-swiper-button-prev',
      }"
            :pagination="{
              type: 'fraction',
              el: '.vp-swiper-pagination',
                clickable: true,
            }"
        >
            <swiper-slide v-for="(slide, index) in slides">
                <div class="vp-horizontal-slide">
                    <div class="vp-horizontal-slide--head">
                        <div class="vp-horizontal-slide--img">
                            <img :src="slide.icon" alt="">
                        </div>
                        <div class="vp-horizontal-slide--name">
                            {{ slide.name }}
                        </div>
                    </div>
                    <div class="vp-horizontal-slide--title">
                        {{ slide.title }}
                    </div>
                    <div class="vp-horizontal-slide--text">
                        {{ slide.text }}
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
import { Pagination, Navigation } from 'swiper/modules';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

export default {
    name: "HorizontalX3Slider",
    props: ['slides', 'title'],
    data() {
        return {
            modules: [Pagination, Navigation],
            activeSlide: 0,
            slider: false
        }
    },
    mounted() {

    },
    methods: {
        getRef(e) {
            this.slider = e
        },
        onSlideChange(e) {
            this.activeSlide = e.activeIndex
            if (this.$refs.preview && this.$refs.preview.scrollEl && this.$refs['preview_btn_' + e.activeIndex] && this.$refs['preview_btn_' + e.activeIndex][0]) {
                let scrollTop = this.$refs['preview_btn_' + e.activeIndex][0].offsetTop
                this.$refs.preview.scrollEl.scroll(0, scrollTop);
            }
        },
        setActiveSlider(index) {
            this.activeSlide = index
            this.slider.slideTo(index)
        },
    }
}
</script>

<style scoped>

</style>