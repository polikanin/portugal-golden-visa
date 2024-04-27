<template>
  <div class="vp-vertical-x3--swiper" v-if="slides">
    <swiper
        :slides-per-view="3"
        direction="vertical"
        :modules="modules"
        :autoplay="{
                        delay: 2000,
                        pauseOnMouseEnter: true
                    }"
        :loop="true"
        @swiper="getRef"
        @slide-change="onSlideChange"
    >
      <swiper-slide v-for="(slide, index) in slides">
        <div class="vp-vertical-slide" data-badge-slide="badge-options-block">
          <div class="vp-vertical-slide--title">
            {{ slide.title }}
          </div>
          <div class="vp-vertical-slide--img">
            <img :src="slide.icon" alt="">
          </div>
          <div class="vp-vertical-slide--text" v-html="slide.text">
          </div>
        </div>
      </swiper-slide>
    </swiper>
  </div>
</template>

<script>
import {Autoplay, EffectFade} from 'swiper/modules';

export default {
  name: "VerticalSlider",
  props: ['slides'],
  data() {
    return {
      modules: [EffectFade, Autoplay],
      activeSlide: 0,
      slider: false
    }
  },
  mounted() {
    let self = this
  },
  methods: {
    getRef(e) {
      this.slider = e
    },
  }
}
</script>

<style scoped>

</style>