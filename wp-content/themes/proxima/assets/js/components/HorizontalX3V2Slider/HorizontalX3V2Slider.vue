<template>
    <div class="wrapper">
        <div class="vp-advantages-block--head">
            <vp-button @click.prevent="openModal('##quiz')">
                <vp-icon type="subtitle"></vp-icon>
                <span class="vp-btn--text">More Information from Fund Advisors</span>
            </vp-button>

            <div class="vp-advantages-block--ctrl">
                <div class="vp-swiper-button-prev">
                    <vp-icon type="arrow-left"></vp-icon>
                </div>
                <div id="vp-swiper-pagination2" class="vp-swiper-pagination"></div>
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
            :space-between="24"
            :modules="modules"
            :slides-per-view="'auto'"
            :centeredSlides="true"
            :loop="true"
        >
            <swiper-slide v-for="(slide, index) in slides">
                <div class="vp-item">
                    <div class="vp-item--inner">
                        <div class="vp-item--title">
                            #{{ index+1 }}
                        </div>
                        <div class="vp-item--img">
                            <img :src="slide.image" alt="">
                        </div>
                    </div>
                    <div class="vp-item--container">
                        <div class="vp-item--text" v-html="slide.text">

                        </div>
                        <vp-button @click.prevent="openModal('##quiz')">
                            <span class="vp-btn--text">{{ slide.link.title }}</span>
                        </vp-button>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide v-for="(slide, index) in slides">
                <div class="vp-item">
                    <div class="vp-item--inner">
                        <div class="vp-item--title">
                            #{{ index+1 }}
                        </div>
                        <div class="vp-item--img">
                            <img :src="slide.image" alt="">
                        </div>
                    </div>
                    <div class="vp-item--container">
                        <div class="vp-item--text" v-html="slide.text">

                        </div>
                        <vp-button @click.prevent="openModal('##quiz')">
                            <span class="vp-btn--text">{{ slide.link.title }}</span>
                        </vp-button>
                    </div>
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