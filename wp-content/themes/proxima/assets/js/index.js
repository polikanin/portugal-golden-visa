import {createApp} from 'vue'
import Components from "./components";
import verticalAnimation from "./verticalAnimation";

import 'swiper/css/effect-fade';

//import '../scss/main.scss';
import 'custom-vue-scrollbar/dist/style.css';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import { useVuelidate } from '@vuelidate/core'
import axios from 'axios'
import { required, email } from '@vuelidate/validators'
import stepAnimation from "./stepAnimation";

createApp({
    delimiters: ['${', '}'],
    setup () {
        return { v$: useVuelidate() }
    },
    data() {
        return {
            isMenu: false,
            fields: window.VpFormFields,
            msg: window.VpErrorMsg,
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
            modules: [Autoplay, Navigation, Pagination],
            selected: false,
            selectedTimeline: false,
            code: window.VpPhoneCode,
            timeline: window.VpTimeline,
            helloActiveSlide: '0',
            helloSlider: false,
            showClipBoardNotice: false,
        }
    },
    validations () {
        return {
            form: {
                firstName: {required},
                lastName: {required},
                email: {required, email},
                phone: {required},
                capability: {required},
                frameToInvestment: {required},
                relocating: {required},
                investment: {required},
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
            }
            else{
                header.classList.remove('fixed')
            }

            if(window.innerWidth > 1024){
                if(window.scrollY > 50){
                    self.topBtnActive = true
                }
                else{
                    self.topBtnActive = false
                }
            }
            else{
                if(window.scrollY > document.body.offsetHeight - document.body.offsetHeight * .1){
                    self.topBtnActive = true
                }
                else{
                    self.topBtnActive = false
                }
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

        document.addEventListener('wheel', (e) => {
            if (e.wheelDeltaY < 0) {
                header.classList.add('hide-header')
            } else {
                header.classList.remove('hide-header')
            }
        })


        verticalAnimation()
        stepAnimation()
    },
    computed: {

    },
    methods: {
        oAuth(e) {
            const portalId = window.portal_id; // Замените на ваш HubSpot портал ID
            const formId = window.form_id; // Замените на ваш HubSpot форм GUID

            const formData = {
                fields: [
                    {
                        name: "email",
                        value: "test@example.com"
                    },
                    {
                        name: "firstname",
                        value: "John Snow 4"
                    },
                    {
                        name: "gender",
                        value: "VASILIY"
                    },
                    {
                        name: "whats_app",
                        value: "Yes"
                    },
                    {
                        name: "motivation",
                        value: 'Backup option if needed due to geopolitical & economical reasons'
                    },
                    {
                        name: "motivation",
                        value: 'Alternative future for my family'
                    }
                ],
                context: {
                    pageUri: "www.example.com/form-page",
                    pageName: "Form Page"
                }
            };

            let url = `https://api.hsforms.com/submissions/v3/integration/submit/${portalId}/${formId}`

            axios.post(url, formData, {
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        copyToClipBoard(e) {
            let self = this;
            navigator.clipboard.writeText(e);
            self.showClipBoardNotice = true

            setTimeout(function (){
                self.showClipBoardNotice = false
            }, 2000)
        },
        getRef(e) {
            this.helloSlider = e
        },
        onHelloSlideChange(e) {
            console.log(e.activeIndex)
            this.helloActiveSlide = e.activeIndex
        },
        setHelloSlide(e) {
            console.log(e)
            this.helloActiveSlide = e
            //console.log(this.$refs.helloSlider)
            this.helloSlider.slideTo(e)
        },
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
        toggleMenu() {
            this.isMenu = !this.isMenu
        },
        showMenu() {
            this.isMenu = true
        },
        hideMenu() {
            this.isMenu = false
        },
        async checkValidation() {
            let self = this;
            console.log(await this.v$)
        },
        submit() {
            let self = this;
            this.v$.$touch()

            setTimeout(function (){
                self.v$.$reset()
            }, 2000)
        }
    },
})
    .use(Components)
    .mount('#vp-app')