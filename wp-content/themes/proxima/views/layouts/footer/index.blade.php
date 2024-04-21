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
        </div>
    </div>
</div>

<div class="vp-support">
    <div class="wrapper">
        <div class="vp-container">
            <div class="vp-support--head">
                <h2 class="vp-subtitle">
                    Need Support Getting the Golden Visa?
                </h2>
                <p class="vp-text">
                    Book an appointment with our consultants and take your first step today
                </p>
            </div>

            @include('components.button', ['button' => [
                'url'=> '##',
                'title' => 'Scedule Your Free Video Call',
                ], 'iconImg' => 'video'])
        </div>
    </div>
</div>


@php($image = get_field('logo', 'options'))
@php($locations = get_field('locations', 'options'))

<footer class="vp-footer">
    <div class="wrapper">
        <div class="vp-footer--logo">
            {!! get_image_html($image, 'full') !!}
        </div>

        <div class="vp-container">
            <div class="vp-footer--col">
                @if($locations)
                    <div class="vp-locations">
                        @foreach($locations as $item)
                            <div class="vp-locations--item">
                                <div class="vp-locations--item-head">
                                    <vp-icon type="location"></vp-icon>
                                    {{ $item['country'] }}
                                </div>
                                @if($item['city'] && $item['address'])
                                    <div class="vp-locations--item-body">
                                        @if($item['city'])
                                            <div class="vp-locations--item-text">
                                                {{ $item['city'] }}
                                            </div>
                                        @endif
                                        @if($item['address'])
                                            <div class="vp-locations--item-text">
                                                {{ $item['address'] }}
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="vp-footer--col">
                <div class="vp-footer--title">
                    Disclaimer
                </div>
                <div class="vp-footer--excerpt">
                    We are an independent team of experts, working on behalf of our clients and advising the same
                    throughout
                    the Golden Visa process. Our clients have direct contact with accredited fund managers and advisors.
                    All services are rendered by professionals duly accredited by their respective professional
                    associations.
                    No information on our site, emailed, or communicated via a meeting or phone call should be
                    interpreted
                    as legal or financial advice. Regulated investment opportunities are complex instruments. Therefore,
                    we only work with investors who are sufficiently knowledgeable and experienced in dealing with these
                    types of investments and are classified as professional investors.
                    <br>
                    <a href="">
                        Please read our full disclaimer.
                    </a>
                </div>
            </div>
            <div class="vp-footer--col">
                <div class="vp-footer--title">
                    Quick links
                </div>
                {!! wp_nav_menu( [
                'theme_location'  => 'footer',
                'menu_id'         => 'footer-menu',
                'container_class' => 'vp-menu',
                'depth'           => 2,
            ] ); !!}
            </div>
        </div>


        {{--        <div class="vp-footer--col">--}}
        {{--            @php($post = get_post(173))--}}

        {{--            {{ $post->post_excerpt }}--}}
        {{--        </div>--}}
    </div>
</footer>

<div class="vp-footer--bottom">
    <div class="wrapper">
        <div class="vp-container">
            <p class="vp-text">
                © 2024 Advisors Portugal. All Rights Reserved.
            </p>
            <p class="vp-text">
                <a href="">
                    Terms and Conditions
                </a>
                |
                <a href="">
                    Privacy Policy
                </a>
            </p>
        </div>
    </div>
</div>
<vp-quiz :is-open="modal.id === '##quiz'" @close="modal.id = false"></vp-quiz>
<div class="vp-badge" ref="badge">
    Drag
</div>
</div>