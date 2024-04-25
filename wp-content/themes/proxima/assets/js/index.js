import {createApp} from 'vue'
import Components from "./components";
import verticalAnimation from "./verticalAnimation";

import 'swiper/css/effect-fade';

//import '../scss/main.scss';
import 'custom-vue-scrollbar/dist/style.css';
import { Autoplay } from 'swiper/modules';
import stepAnimation from "./stepAnimation";

createApp({
    delimiters: ['${', '}'],
    data() {
        return {
            isQuizOpen: true,
            isBadgeActive: false,
            isSlideChange: true,
            swiperAutoplaySpeed: 9000,
            modal: {
                isModal: false,
                id: false,
            },
            modules: [Autoplay],
            selected: false,
            selectedTimeline: false,
            code: [
                {
                    value: '(+380)',
                    mask: 'XX-XXX-XX-XX',
                    icon: 'ukraine',
                },
                {
                    value: '(+1)',
                    mask: 'XX-XXX-XX-XX',
                    icon: 'canada',
                },
                {
                    value: '(+82)',
                    mask: 'XX-XXX-XX-XX',
                    icon: 'south-korea',
                },
                {
                    value: '(+001)',
                    mask: 'XX-XXX-XX-XX',
                    icon: 'usa',
                },
                {
                    value: '(+44)',
                    mask: 'XX-XXX-XX-XX',
                    icon: 'british',
                },
            ],
            timeline: [
                {
                    value: '(GMT +1)',
                    mask: 'Europe/Kyiv',
                },
                {
                    value: '(GMT +2)',
                    mask: 'Europe/Kyiv',
                },
                {
                    value: '(GMT +3)',
                    mask: 'Europe/Kyiv',
                },
            ]
        }
    },
    mounted () {
        let self = this;
        const header = document.querySelector('.vp-header')
        const progress = document.querySelectorAll('[data-progress-container]')
        const badgeSlides = document.querySelectorAll('[data-badge-slide]')

        window.addEventListener('scroll', function (){
            self.deactivateBadge()

            if(window.scrollY > 50){
                header.classList.add('fixed')
            }
            else{
                header.classList.remove('fixed')
            }

            progress.forEach(item => {
                if(item && item.getBoundingClientRect().y < 150){
                    let height = item.getBoundingClientRect().height
                    let oy = Math.abs(item.getBoundingClientRect().y - 150)
                    if(100/height*oy <= 100){
                        item.style.setProperty('--progress', `${100/height*oy}%`);
                    }
                    else{
                        item.style.setProperty('--progress', '100%');
                    }
                }
                else{
                    item.style.setProperty('--progress', '0%');
                }
            })
        })

        badgeSlides.forEach(item => {
            item.addEventListener('mouseover', function(e){
                self.activateBadge(e)
            })
            item.addEventListener('mouseout', function(){
                self.deactivateBadge()
            })
        })

        verticalAnimation()
        stepAnimation()
    },
    computed: {

    },
    methods: {
        select(e) {
            this.selected = e
        },
        selectTimeline(e) {
            this.selectedTimeline = e
        },
        activateBadge(e) {
            let self = this;
            let target = e.target
            let blockClass = target.dataset.badgeSlide
            if(target.parentNode.classList.contains('swiper-slide-next') && self.isSlideChange){
                self.isBadgeActive = true
                self.$refs.badge.classList.add(blockClass)
                self.$refs.badge.classList.add('active')
                self.$refs.badge.style.top = target.getBoundingClientRect().y + 'px'
                self.$refs.badge.style.left = target.getBoundingClientRect().x + 'px'
            }
        },
        deactivateBadge() {
            let self = this;
            self.isBadgeActive = false
            self.$refs.badge.classList.remove('active')
            setTimeout(function (){
                if(!self.isBadgeActive) {
                    self.$refs.badge.removeAttribute("class")
                    self.$refs.badge.classList.add('vp-badge')
                }
            }, 300)
        },
        onSlideChange() {
            let self = this;

            setTimeout(function (){
                self.isSlideChange = true
            }, 300)
        },
        progress() {

        },
        start() {
            this.deactivateBadge()
            this.isSlideChange = false
        }
    },
})
    .use(Components)
    .mount('#vp-app')