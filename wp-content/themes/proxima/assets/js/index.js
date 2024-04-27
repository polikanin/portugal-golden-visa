import {createApp} from 'vue'
import Components from "./components";
import verticalAnimation from "./verticalAnimation";

import 'swiper/css/effect-fade';

//import '../scss/main.scss';
import 'custom-vue-scrollbar/dist/style.css';
import { Autoplay, Navigation } from 'swiper/modules';
import { useVuelidate } from '@vuelidate/core'
import { required, email } from '@vuelidate/validators'
import stepAnimation from "./stepAnimation";

createApp({
    delimiters: ['${', '}'],
    setup () {
        return { v$: useVuelidate() }
    },
    data() {
        return {
            fields: {
                motivation: [
                    'Backup option if needed due to geopolitical & economical reasons',
                    'Investment diversification',
                    'Alternative future for my family',
                    'Freedom of movement',
                    'Retirement in the future',
                    'Relocation in mid — long term',
                ],
                objectives: [
                    'Capital preservation',
                    'Moderate capital gains',
                    'High capital gains',
                ],
                risk: [
                    'Conservative',
                    'Moderate',
                    'High',
                ],
                investment: [
                    'Venture or private equity funds?',
                    'Cultural heritage / artistic production?',
                    'Direct investment that creates jobs?',
                ],
                relocating: [
                    'Relocation in 1 year',
                    'Relocation in 3+ years',
                    'Relocation in 5+ years',
                    'No specific plans for now',
                ],
                frameToInvestment: [
                    'Immediate',
                    '2 months',
                    '> 4 months',
                ],
            },
            msg: {
                terms: 'terms error',
                firstName: 'firstName error',
                lastName: 'lastName error',
                email: 'email error',
            },
            form: {
                terms: false,
                firstName: '',
                lastName: '',
                email: '',
                phone: '',
                phoneCode: '',
                videoCall: '',
                whatsAppCall: '',
                message: '',
                timelineCode: '',
                timelineCity: '',
                motivation: [],
                objectives: [],
                risk: '',
                investment: [],
                capability: '',
                relocating: '',
                frameToInvestment: '',
            },
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
            code: window.VpPhoneCode,
            timeline: window.VpTimeline,
        }
    },
    validations () {
        return {
            form: {
                firstName: {required},
                lastName: {required},
                email: {required, email},
            },
        }
    },
    mounted () {
        let self = this;
        const header = document.querySelector('.vp-header')
        const progress = document.querySelectorAll('[data-progress-container]')
        let setupScrollSettings = function (){
            if(window.scrollY > 50){
                header.classList.add('fixed')
                self.topBtnActive = true
            }
            else{
                header.classList.remove('fixed')
                self.topBtnActive = false
            }
        }

        setupScrollSettings()

        window.addEventListener('scroll', function (){
            setupScrollSettings()

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
            window.scrollTo({top: 0, behavior: 'smooth'});
        },
        start() {
            this.isSlideChange = false
        },
        async submit() {
            let self = this;
            this.v$.$touch()
            console.log(this.form)
            console.log(await this.v$.$validate())


            setTimeout(function (){
                self.v$.$reset()
            }, 2000)
        }
    },
})
    .use(Components)
    .mount('#vp-app')