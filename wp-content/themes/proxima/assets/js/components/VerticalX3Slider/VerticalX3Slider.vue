<template>
  <div class="vp-vertical-x3--swiper" v-if="slides">
    <div class="vp-vertical-slide--badge" ref="badge">
      Drag
    </div>
    <swiper
        :slides-per-view="3"
        direction="vertical"
        :modules="modules"
        @swiper="getRef"
        @slide-change="onSlideChange"
    >
      <swiper-slide v-for="(slide, index) in slides">
        <div class="vp-vertical-slide" @mouseover.self="hoverOn" @mouseout.self="hoverOff">
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
import {EffectFade} from 'swiper/modules';

export default {
  name: "VerticalSlider",
  props: ['slides'],
  data() {
    return {
      modules: [EffectFade],
      activeSlide: 0,
      slider: false
    }
  },
  mounted() {
    let self = this
    window.addEventListener('scroll', function (){
      self.$refs.badge.classList.remove('active')
    });
  },
  methods: {
    getRef(e) {
      this.slider = e
    },
    hoverOn(e) {
      let self = this
      let target = e.target
      if(target.parentNode.classList.contains('swiper-slide-next')){
        self.$refs.badge.classList.add('active')
        console.log(target.getBoundingClientRect().x)
        self.$refs.badge.style.top = target.getBoundingClientRect().y + 'px'
        self.$refs.badge.style.left = target.getBoundingClientRect().x + 'px'
      }
    },
    hoverOff(e) {
      this.$refs.badge.classList.remove('active')
    },
  }
}
</script>

<style scoped>

</style>