<template>
    <h2 class="vp-title" v-if="title && (link || subtitle)" v-html="title">

    </h2>
    <h2 class="vp-subtitle" v-if="title && link" v-html="subtitle">

    </h2>

    <div class="vp-fund-step-block--head">
        <vp-button v-if="link" @click.prevent="openModal(link['url'])">
            <vp-icon type="subtitle"></vp-icon>
            <span class="vp-btn--text">{{ link['title'] }}</span>
        </vp-button>

        <h2 class="vp-subtitle" v-if="!link && subtitle" v-html="subtitle">

        </h2>

        <h2 class="vp-title" v-if="!link && !subtitle && title" v-html="title">

        </h2>

        <div class="vp-fund-step-block--ctrl vp-hidden-mob">
            <div class="vp-swiper-button-prev swiper-button-disabled">
                <vp-icon type="arrow-left"></vp-icon>
            </div>

            <div class="vp-swiper-button-next">
                <vp-icon type="arrow-right"></vp-icon>
            </div>
        </div>
    </div>

    <swiper
        v-if="slides"
        :modules="modules"
        :navigation="{
                        nextEl: '#'+ id + ' .vp-swiper-button-next',
                        prevEl: '#'+ id + ' .vp-swiper-button-prev',
                     }"
        :pagination="pagination"
        :breakpoints="{
                      '320': {
                        slidesPerView: 1,
                        autoHeight: true,
                        spaceBetween: 20
                      },
                      '560': {
                        slidesPerView: 1,
                        spaceBetween: 20
                      },
                      '660': {
                        slidesPerView: 'auto',
                        spaceBetween: 34
                      },
                    }"
    >
        <swiper-slide v-for="(slide, index) in slides">
            <div class="vp-fund-slide">
                <div class="vp-fund-slide--index vp-hidden-mob" data-step-btn="{{ $loop->index }}">
                    {{ index + 1 }}
                </div>
                <div class="vp-fund-slide--head">
                    <div class="vp-fund-slide--title" v-html="slide['title']">

                    </div>
                </div>
                <div class="vp-fund-slide--body" v-if="slide['points']">
                    <div class="vp-fund-slide--items">
                        <div class="vp-fund-slide--item" v-for="point in slide['points']">
                            <div class="vp-fund-slide--item-title" v-html="point['title']">

                            </div>
                            <div class="vp-fund-slide--item-value" v-html="point['value']">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>

        <swiper-slide class="vp-last-slide vp-hidden-mob"></swiper-slide>
    </swiper>

    <div class="vp-fund-step-block--ctrl vp-show-mob">
        <div class="vp-swiper-button-prev swiper-button-disabled">
            <vp-icon type="arrow-left"></vp-icon>
        </div>
        <div id="vp-swiper-pagination2" class="vp-swiper-pagination"></div>
        <div class="vp-swiper-button-next">
            <vp-icon type="arrow-right"></vp-icon>
        </div>
    </div>
</template>

<script>
import { Pagination, Navigation } from 'swiper/modules';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

export default {
    name: "HorizontalX3Slider",
    props: ['slides', 'title', 'subtitle', 'link', 'id'],
    data() {
        return {
            modules: [Pagination, Navigation],
            activeSlide: 0,
            slider: false,
            pagination: {
                el: '#'+ this.id + ' .vp-swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },
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
        openModal(id) {
            this.$emit('open-modal', id);
        }
    }
}
</script>

<style scoped>

</style>