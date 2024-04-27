<div class="vp-form">
    <div class="wrapper">
        <div class="vp-form--inner">
            <h4 class="vp-form--title">
                Schedule a Free Video Consultation
            </h4>
            <p class="vp-form--subtitle">
                Schedule a 45 minute introductory confidential video call
            </p>

            <div class="vp-form--grid-2x">
                <div class="vp-form--container">
                    <div class="vp-form--group">
                        <div class="vp-form--block">
                            <input class="vp-input"
                                   :class="{'vp-input--error': v$.form.firstName.$error}"
                                   type="text"
                                   v-model="form.firstName"
                                   placeholder="First Name">
                            <div class="vp-error--msg" v-if="v$.form.firstName.$error">${msg.firstName}</div>
                        </div>
                        <div class="vp-form--block">
                            <input class="vp-input"
                                   :class="{'vp-input--error': v$.form.lastName.$error}"
                                   type="text"
                                   v-model="form.lastName"
                                   placeholder="Last Name">
                            <div class="vp-error--msg" v-if="v$.form.lastName.$error">${msg.lastName}</div>
                        </div>
                    </div>
                    <div class="vp-form--group">
                        <div class="vp-form--block">
                            <input class="vp-input"
                                   :class="{'vp-input--error': v$.form.email.$error}"
                                   type="text"
                                   v-model="form.email"
                                   placeholder="Email">
                            <div class="vp-error--msg" v-if="v$.form.email.$error">${msg.email}</div>
                        </div>
                    </div>
                    <div class="vp-form--group">
                        <div class="vp-input--group">
                            <div class="vp-input--preview">
                                <vp-dropdown :list="code" @select="select"></vp-dropdown>
                            </div>
                            <vp-mask class="vp-input" v-model="form.phone" :mask="selected.mask" :placeholder="selected.placeholder" />
                        </div>
                    </div>
                </div>

                <div class="vp-form--img">
                    {!! get_image_html($image, 'full') !!}
                </div>
            </div>

            <div class="vp-form--grid-4x">
                <div class="vp-form--box">
                    <div class="vp-form--box-title">
                        Do you have financial capability<br>
                        to support investment vehicles at<br>
                        €500,000?
                    </div>
                    <label class="vp-radio">
                        <input type="radio" value="Yes" name="capability" v-model="form.capability">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           Yes
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio" value="No" name="capability" v-model="form.capability">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           No
          </span>
                    </label>
                </div>

                <div class="vp-form--box">
                    <div class="vp-form--box-title">
                        Time frame to investment?
                    </div>
                    <label class="vp-radio" v-for="item in fields.frameToInvestment">
                        <input type="radio" name="frameToInvestment" :value="item" v-model="form.frameToInvestment">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">${item}</span>
                    </label>
                </div>

                <div class="vp-form--box">
                    <div class="vp-form--box-title">
                        Are you planning on relocating to Portugal?
                    </div>

                    <label class="vp-radio" v-for="item in fields.relocating">
                        <input type="radio" name="relocating" :value="item" v-model="form.relocating">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">${item}</span>
                    </label>
                </div>

                <div class="vp-form--box">
                    <div class="vp-form--box-title">
                        Preferred type of investment?
                        <span>* Up to two responses</span>
                    </div>

                    <label class="vp-checkbox"
                           v-for="item in fields.investment"
                        :class="{
                        'vp-disabled': form.investment.length >= 2 && form.investment.indexOf(item) === -1
                        }">
                        <input type="checkbox"
                               :value="item"
                               :disabled="form.investment.length >= 2 && form.investment.indexOf(item) === -1"
                               v-model="form.investment">
                        <span class="vp-checkbox--box"></span>
                        <span class="vp-checkbox--text">${item}</span>
                    </label>
                </div>
            </div>

            <div class="vp-form--terms">
                By clicking “Submit” you agree to our
                <a href="">Terms and Conditions </a>
                and
                <a href="">Privacy Policy</a>
            </div>

            <div class="vp-form--ctrl">
                <vp-button @click="submit">
                    <span class="vp-btn--text">Submit</span>
                    <vp-icon type="arrow-next"></vp-icon>
                </vp-button>
            </div>
        </div>
    </div>
</div>