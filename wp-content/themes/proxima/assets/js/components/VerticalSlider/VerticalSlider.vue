<template>
    <div class="vp-container" v-if="slides">
        <custom-scrollbar :style="{ height: '332px' }" ref="preview">
            <div class="vp-vertical-slider-block--preview">
                <div class="vp-vertical-slide--btn"
                     v-for="(slide, index) in slides"
                     :ref="'preview_btn_' + index"
                     @click="setActiveSlider(index)"
                     :class="{active: activeSlide === index}"
                >
                    <div class="vp-vertical-slide--btn-index">
                        <template v-if="index + 1 < 10">0</template>
                        {{ index + 1 }}
                    </div>
                    {{ slide.title }}
                </div>
            </div>
        </custom-scrollbar>
        <div class="vp-vertical-slider-block--swiper">
            <swiper
                :slides-per-view="1"
                effect="fade"
                direction="vertical"
                :modules="modules"
                @swiper="getRef"
                @slide-change="onSlideChange"
            >
                <swiper-slide v-for="(slide, index) in slides">
                    <div class="vp-vertical-slide">
                        <div class="vp-vertical-slide--img">
                            <img :src="slide.image" alt="">
                        </div>
                        <div class="vp-vertical-slide--block">
                            <div class="vp-vertical-slide--title">
                                {{ slide.title }}
                            </div>
                            <div class="vp-vertical-slide--text">
                                {{ slide.text }}
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
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
            this.activeSlide = e.activeIndex
            if(this.$refs.preview && this.$refs.preview.scrollEl && this.$refs['preview_btn_' + e.activeIndex] && this.$refs['preview_btn_' + e.activeIndex][0]){
                let scrollTop = this.$refs['preview_btn_' + e.activeIndex][0].offsetTop
                this.$refs.preview.scrollEl.scroll(0, scrollTop);
            }
        },
        setActiveSlider(index){
            this.activeSlide = index
            this.slider.slideTo(index)
        },
    }
}
</script>

<style scoped>

</style>