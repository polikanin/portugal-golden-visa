<template>
    <div class="vp-vertical-x3--swiper" v-if="slides">
        <swiper
            :slides-per-view="3"
            direction="vertical"
            :modules="modules"
            @swiper="getRef"
            @slide-change="onSlideChange"
        >
            <swiper-slide v-for="(slide, index) in slides">
                <div class="vp-vertical-slide">
                    <div class="vp-vertical-slide--title">
                        {{ slide.title }}
                    </div>
                    <div class="vp-vertical-slide--img">
                        <img :src="slide.icon" alt="">
                    </div>
                    <div class="vp-vertical-slide--text">
                        {{ slide.text }}
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
import { EffectFade} from 'swiper/modules';

export default {
    name: "VerticalSlider",
    props: ['slides'],
    data(){
        return {
            modules: [EffectFade],
            activeSlide: 0,
            slider: false
        }
    },
    mounted() {
        console.log(this.slides)
    },
    methods: {
        getRef(e){
            this.slider = e
        },
        onSlideChange(e){

        },
        setActiveSlider(index){

        },
    }
}
</script>

<style scoped>

</style>