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

<div class="vp-badge" ref="badge">
    Drag
</div>
</div>