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
        window.addEventListener('scroll', function (){
            if(window.scrollY > 50){
                header.classList.add('fixed')
            }
            else{
                header.classList.remove('fixed')
            }
        })
    },
    computed: {

    },
    methods: {

    },
})
    .use(Components)
    .mount('#vp-app')