import {createApp} from 'vue'
import Components from "./components";

import 'swiper/css/effect-fade';

import 'custom-vue-scrollbar/dist/style.css';

createApp({
    delimiters: ['${', '}'],
    data() {
        return {

            modal: {
                isModal: false,
                id: false,
            },
        }
    },
    mounted () {
        let self = this;
        const header = document.querySelector('.vp-header')
        const progress = document.querySelectorAll('[data-progress-container]')

        window.addEventListener('scroll', function (){
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
    },
    computed: {

    },
    methods: {

    },
})
    .use(Components)
    .mount('#vp-app')