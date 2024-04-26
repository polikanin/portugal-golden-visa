<template>
    <div class="wrapper">
        <div class="vp-advantages-block--head">
            <vp-button @click.prevent="openModal('##quiz')">
                <vp-icon type="subtitle"></vp-icon>
                More Information from Fund Advisors
            </vp-button>

            <div class="vp-advantages-block--ctrl">
                <div class="vp-swiper-button-prev">
                    <vp-icon type="arrow-left"></vp-icon>
                </div>
                <div class="vp-swiper-pagination"></div>
                <div class="vp-swiper-button-next">
                    <vp-icon type="arrow-right"></vp-icon>
                </div>
            </div>
        </div>
    </div>
    <div class="vp-horizontal--swiper" v-if="slides">
        <swiper
            :navigation="{
        nextEl: '.vp-swiper-button-next',
        prevEl: '.vp-swiper-button-prev',
      }"
            :pagination="{
              type: 'fraction',
              el: '.vp-swiper-pagination',
                clickable: true,
            }"
            :space-between="24"
            :modules="modules"
            :slides-per-view="'auto'"
            :centeredSlides="true"
            :loop="true"
        >
            <swiper-slide v-for="slide in slides">
                <div class="vp-item">
                    <div class="vp-item--inner">
                        <div class="vp-item--title">
                            {{ slide.value }}
                        </div>
                        <div class="vp-item--img">
                            <img :src="slide.image" alt="">
                        </div>
                    </div>
                    <div class="vp-item--text">
                        {{ slide.text }}
                    </div>
                    <vp-button @click.prevent="openModal('##quiz')">
                        {{ slide.link.title }}
                    </vp-button>
                </div>
            </swiper-slide>
            <swiper-slide v-for="slide in slides">
                <div class="vp-item">
                    <div class="vp-item--inner">
                        <div class="vp-item--title">
                            {{ slide.value }}
                        </div>
                        <div class="vp-item--img">
                            <img :src="slide.image" alt="">
                        </div>
                    </div>
                    <div class="vp-item--text">
                        {{ slide.text }}
                    </div>
                    <vp-button @click.prevent="openModal('##quiz')">
                        {{ slide.link.title }}
                    </vp-button>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
import {Pagination, Navigation} from 'swiper/modules';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

export default {
    name: "HorizontalX3Slider",
    props: ['slides', 'title', 'subtitle'],
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
        openModal(n){
            this.$emit('open-modal', n);
        }
    }
}
</script>

<style scoped>

</style>