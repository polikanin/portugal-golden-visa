<template>
    <vp-modal v-show="isOpen">
        <template #header>
            <div class="vp-modal--header" v-show="step < 5">
                <h2 class="vp-modal--title" v-show="step === 0">
                    Initial Onboarding Questionnaire
                </h2>
                <h2 class="vp-modal--title" style="text-align: center; padding-left: 60px" v-show="step !== 0">
                    Lead form
                </h2>
                <div class="vp-modal--close" @click="$emit('close')" v-show="step !== 0">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </template>
        <template #body>
            <transition>
                <div class="vp-modal--steps" v-show="step !== 0 && step < 5">
                    <div class="vp-modal--step" :class="{active: step === 1}">01</div>
                    <div class="vp-modal--step-line"></div>
                    <div class="vp-modal--step" :class="{active: step === 2}">02</div>
                    <div class="vp-modal--step-line"></div>
                    <div class="vp-modal--step" :class="{active: step === 3}">03</div>
                    <div class="vp-modal--step-line"></div>
                    <div class="vp-modal--step" :class="{active: step === 4}">04</div>
                </div>
            </transition>

            <transition>
                <div class="vp-modal--body" v-show="step === 0">
                    <p class="vp-modal--subtitle">
                        We want to ensure we provide you with a tailor made and efficient service.
                        Please take the following 1 minute to provide us with necessary information. One of our advisors
                        will be in
                        touch with you within 24 hours.
                        Confidentiality and trust are at the core of our values. No information will be shared with
                        third parties.
                    </p>
                    <div class="vp-modal--terms">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
            I agree to the
            <a href="">Terms and Conditions </a>
            <b>and </b>
            <a href="">Privacy Policy</a>
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--navigation">
                        <vp-button icon="arrow-next" @click="step++">Press to start</vp-button>
                    </div>
                </div>
            </transition>

            <transition>
                <div class="vp-modal--body" v-show="step === 1">
                    <div class="vp-modal--group">
                        <input class="vp-input"
                               type="text"
                               placeholder="First Name">
                    </div>
                    <div class="vp-modal--group">
                        <input class="vp-input"
                               type="text"
                               placeholder="Last Name">
                    </div>
                    <div class="vp-modal--group">
                        <input class="vp-input"
                               type="text"
                               placeholder="Email">
                    </div>
                    <div class="vp-modal--group">
                        <div class="vp-input--group">
                            <div class="vp-input--preview">
                                <vp-dropdown :list="code" @select="select"></vp-dropdown>
                            </div>
                            <input class="vp-input"
                                   type="text"
                                   :placeholder="selected.mask">
                        </div>
                    </div>

                    <div class="vp-modal--block">
                        <div class="vp-modal--block-label">
                            Would you like to schedule a complimentary video call with an allocated advisor?
                        </div>
                        <div class="vp-modal--block-container">
                            <label class="vp-radio">
                                <input type="radio" value="Yes" name="test">
                                <span class="vp-radio--box"></span>
                                <span class="vp-radio--text">Yes</span>
                            </label>
                            <label class="vp-radio">
                                <input type="radio" value="No" name="test">
                                <span class="vp-radio--box"></span>
                                <span class="vp-radio--text">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="vp-modal--block">
                        <div class="vp-modal--block-label">
                            May we contact you via WhatsApp?
                        </div>
                        <div class="vp-modal--block-container">
                            <label class="vp-radio">
                                <input type="radio" value="Yes" name="test">
                                <span class="vp-radio--box"></span>
                                <span class="vp-radio--text">Yes</span>
                            </label>
                            <label class="vp-radio">
                                <input type="radio" value="No" name="test">
                                <span class="vp-radio--box"></span>
                                <span class="vp-radio--text">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="vp-modal--navigation">
                        <vp-button btn-class="vp-btn--simple" @click="step--">
                            <vp-icon type="arrow-prev"></vp-icon>
                            Go Back
                        </vp-button>
                        <vp-button @click="step++">
                            Next Step
                            <vp-icon type="arrow-next"></vp-icon>
                        </vp-button>
                    </div>
                </div>
            </transition>

            <transition>
                <div class="vp-modal--body" v-show="step === 2">
                    <div class="vp-modal--group">
              <textarea class="vp-textarea"
                        placeholder="Family composition of the applicants including age?"></textarea>
                    </div>
                    <div class="vp-modal--group">
                        <div class="vp-input--group">
                            <div class="vp-input--preview">
                                <vp-dropdown :list="timeline" @select="selectTimeline"></vp-dropdown>
                            </div>
                            <input class="vp-input"
                                   type="text"
                                   :placeholder="selectedTimeline.mask">
                        </div>
                    </div>
                    <div class="vp-modal--label">
                        What is the motivation behind obtaining the Portuguese Golden
                        <span>* Choose one or more options</span>
                    </div>

                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Backup option if needed due to geopolitical & economical reasons
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Investment diversification
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Alternative future for my family
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Freedom of movement
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Retirement in the future
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Relocation in mid — long term
          </span>
                        </label>
                    </div>

                    <div class="vp-modal--navigation">
                        <vp-button btn-class="vp-btn--simple" @click="step--">
                            <vp-icon type="arrow-prev"></vp-icon>
                            Go Back
                        </vp-button>
                        <vp-button @click="step++">
                            Next Step
                            <vp-icon type="arrow-next"></vp-icon>
                        </vp-button>
                    </div>
                </div>
            </transition>

            <transition>
                <div class="vp-modal--body" v-show="step === 3">
                    <div class="vp-modal--label">
                        What are your objectives in regards to the investment vehicle chosen?
                        <span>*Up to two responses</span>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Capital preservation
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Moderate capital gains
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           High capital gains
          </span>
                        </label>
                    </div>

                    <div class="vp-modal--label">
                        How would you describe your risk profile?
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           Conservative
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           Moderate
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           High
          </span>
                        </label>
                    </div>

                    <div class="vp-modal--label">
                        Preferred type of investment?
                        <span>* Up to two responses</span>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Venture or private equity funds?
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Cultural heritage / artistic production?
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-checkbox">
                            <input type="checkbox">
                            <span class="vp-checkbox--box"></span>
                            <span class="vp-checkbox--text">
           Direct investment that creates jobs?
          </span>
                        </label>
                    </div>

                    <div class="vp-modal--navigation">
                        <vp-button btn-class="vp-btn--simple" @click="step--">
                            <vp-icon type="arrow-prev"></vp-icon>
                            Go Back
                        </vp-button>
                        <vp-button @click="step++">
                            Next Step
                            <vp-icon type="arrow-next"></vp-icon>
                        </vp-button>
                    </div>
                </div>
            </transition>

            <transition>
                <div class="vp-modal--body" v-show="step === 4">
                    <div class="vp-modal--block">
                        <div class="vp-modal--block-label">
                            Do you have financial capability to support investment vehicles
                            at €500,000?
                        </div>
                        <div class="vp-modal--block-container">
                            <label class="vp-radio">
                                <input type="radio" value="Yes" name="test">
                                <span class="vp-radio--box"></span>
                                <span class="vp-radio--text">Yes</span>
                            </label>
                            <label class="vp-radio">
                                <input type="radio" value="No" name="test">
                                <span class="vp-radio--box"></span>
                                <span class="vp-radio--text">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="vp-modal--label">
                        Are you planning on relocating to Portugal?
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           Relocation in 1 year
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           Relocation in 3+ years
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           Relocation in 5+ years
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           No specific plans for now
          </span>
                        </label>
                    </div>

                    <div class="vp-modal--label">
                        Time frame to investment?
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           Immediate
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           2 months
          </span>
                        </label>
                    </div>
                    <div class="vp-modal--group">
                        <label class="vp-radio">
                            <input type="radio">
                            <span class="vp-radio--box"></span>
                            <span class="vp-radio--text">
           > 4 months
          </span>
                        </label>
                    </div>


                    <div class="vp-modal--navigation">
                        <vp-button btn-class="vp-btn--simple" @click="step--">
                            <vp-icon type="arrow-prev"></vp-icon>
                            Go Back
                        </vp-button>
                        <vp-button @click="step++">
                            Next Step
                            <vp-icon type="arrow-next"></vp-icon>
                        </vp-button>
                    </div>
                </div>
            </transition>

            <transition>
                <div class="vp-modal--body" v-show="step === 5">
                    <h2 class="vp-modal--heading">
                        Thank you!
                    </h2>

                    <div class="vp-modal--text">
                        One of our advisors will be in touch with you within 24 hours.<br>
                        Please be attentive to your e-mail.
                    </div>

                    <div class="vp-modal--navigation">
                        <vp-button @click="$emit('close')">
                            Continue
                            <vp-icon type="arrow-next"></vp-icon>
                        </vp-button>
                    </div>
                </div>
            </transition>
        </template>
    </vp-modal>
</template>

<script>
export default {
    name: "Quiz",
    props: ['isOpen'],
    data() {
        return {
            step: 0,
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
    mounted() {

    },
    methods: {
        close() {
            console.log('close')
        },
        select(e) {
            this.selected = e
        },
        selectTimeline(e) {
            this.selectedTimeline = e
        },
    }
}
</script>

<style scoped>

</style>