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
                                   type="text"
                                   placeholder="First Name">
                        </div>
                        <div class="vp-form--block">
                            <input class="vp-input"
                                   type="text"
                                   placeholder="Last Name">
                        </div>
                    </div>
                    <div class="vp-form--group">
                        <div class="vp-form--block">
                            <input class="vp-input"
                                   type="text"
                                   placeholder="Email">
                        </div>
                    </div>
                    <div class="vp-form--group">
                        <div class="vp-input--group">
                            <div class="vp-input--preview">
                                <vp-dropdown :list="code" @select="select"></vp-dropdown>
                            </div>
                            <input class="vp-input"
                                   type="text"
                                   :placeholder="selected.mask">
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
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           Yes
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio">
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
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           Immediate
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           2 months
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           > 4 months
          </span>
                    </label>
                </div>

                <div class="vp-form--box">
                    <div class="vp-form--box-title">
                        Are you planning on relocating to Portugal?
                    </div>
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           Relocation in 1 year
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           Relocation in 3+ years
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           Relocation in 5+ years
          </span>
                    </label>
                    <label class="vp-radio">
                        <input type="radio">
                        <span class="vp-radio--box"></span>
                        <span class="vp-radio--text">
           No specific plans for now
          </span>
                    </label>
                </div>

                <div class="vp-form--box">
                    <div class="vp-form--box-title">
                        Preferred type of investment?
                        <span>* Up to two responses</span>
                    </div>
                    <label class="vp-checkbox">
                        <input type="checkbox">
                        <span class="vp-checkbox--box"></span>
                        <span class="vp-checkbox--text">
           Venture or private equity funds?
          </span>
                    </label>
                    <label class="vp-checkbox">
                        <input type="checkbox">
                        <span class="vp-checkbox--box"></span>
                        <span class="vp-checkbox--text">
           Cultural heritage / artistic production?
          </span>
                    </label>
                    <label class="vp-checkbox">
                        <input type="checkbox">
                        <span class="vp-checkbox--box"></span>
                        <span class="vp-checkbox--text">
           Direct investment that creates jobs?
          </span>
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
                <vp-button>
                    <span class="vp-btn--text">Submit</span>
                    <vp-icon type="arrow-next"></vp-icon>
                </vp-button>
            </div>
        </div>
    </div>
</div>