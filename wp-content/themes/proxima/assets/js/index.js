import {createApp} from 'vue'
import Components from "./components";
import verticalAnimation from "./verticalAnimation";

import 'swiper/css/effect-fade';

//import '../scss/main.scss';
import 'custom-vue-scrollbar/dist/style.css';
import { Autoplay, Navigation } from 'swiper/modules';
import stepAnimation from "./stepAnimation";

createApp({
    delimiters: ['${', '}'],
    data() {
        return {
            topBtnActive: false,
            isQuizOpen: true,
            isBadgeActive: false,
            isSlideChange: true,
            swiperAutoplaySpeed: 9000,
            modal: {
                isModal: false,
                id: false,
            },
            modules: [Autoplay, Navigation],
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

        window.addEventListener('scroll', function (){
            if(window.scrollY > 50){
                header.classList.add('fixed')
                self.topBtnActive = true
            }
            else{
                header.classList.remove('fixed')
                self.topBtnActive = false
            }

            progress.forEach(item => {
                if(item && item.getBoundingClientRect().y < 150){
                    let height = item.getBoundingClientRect().height - window.innerHeight + 240
                    let oy = Math.abs(item.getBoundingClientRect().y - 150)
                    if(100/height*oy <= 100){
                        item.parentNode.style.setProperty('--progress', `${100/height*oy}%`);
                    }
                    else{
                        item.parentNode.style.setProperty('--progress', '100%');
                    }
                }
                else{
                    item.parentNode.style.setProperty('--progress', '0%');
                }
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
        onSlideChange() {
            let self = this;

            setTimeout(function (){
                self.isSlideChange = true
            }, 300)
        },
        goToTop() {
            window.scrollTo(0, 0)
        },
        start() {
            this.isSlideChange = false
        }
    },
})
    .use(Components)
    .mount('#vp-app')