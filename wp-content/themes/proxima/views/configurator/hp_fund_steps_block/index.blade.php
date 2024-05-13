<div id="{{ $section_id }}"
     class="vp-fund-step-block"
>
    <div class="wrapper">
        @if($title and ($link or $subtitle))
            <h2 class="vp-title">
                {!! $title !!}
            </h2>
        @endif
        @if($subtitle and $link)
            <h2 class="vp-subtitle">
                {!! $subtitle !!}
            </h2>
        @endif
        <div class="vp-fund-step-block--head">
            @if($link)
                <vp-button @click.prevent="modal.id = '{{ $link['url'] }}'">
                    <vp-icon type="subtitle"></vp-icon>
                    <span class="vp-btn--text">{{ $link['title'] }}</span>
                </vp-button>
            @endif

                @if(!$link and $subtitle)
                    <h2 class="vp-subtitle">
                        {!! $subtitle !!}
                    </h2>
                @endif

                @if(!$link and !$subtitle and $title)
                    <h2 class="vp-title">
                        {!! $title !!}
                    </h2>
                @endif

            <div class="vp-fund-step-block--ctrl vp-hidden-mob">
                <div class="vp-swiper-button-prev swiper-button-disabled">
                    <vp-icon type="arrow-left"></vp-icon>
                </div>

                <div class="vp-swiper-button-next">
                    <vp-icon type="arrow-right"></vp-icon>
                </div>
            </div>
        </div>

        @if($slider)
            <swiper
                    :modules="modules"
                    :navigation="{
                        nextEl: '.vp-swiper-button-next',
                        prevEl: '.vp-swiper-button-prev',
                     }"
                    :pagination="pagination"
                    :breakpoints="{
                      '320': {
                        slidesPerView: 1,
                        autoHeight: true,
                        spaceBetween: 20
                      },
                      '560': {
                        slidesPerView: 1,
                        spaceBetween: 20
                      },
                      '660': {
                        slidesPerView: 'auto',
                        spaceBetween: 34
                      },
                    }"
            >
                @foreach($slider as $item)
                    <swiper-slide>
                        <div class="vp-fund-slide">
                            <div class="vp-fund-slide--index vp-hidden-mob" data-step-btn="{{ $loop->index }}">
                                {{ $loop->index + 1 }}
                            </div>
                            <div class="vp-fund-slide--head">
                                <div class="vp-fund-slide--title">
                                    {!! $item['title'] !!}
                                </div>
                            </div>
                            <div class="vp-fund-slide--body">
                                @if($item['points'])
                                    <div class="vp-fund-slide--items">
                                        @foreach($item['points'] as $point)
                                            <div class="vp-fund-slide--item">
                                                <div class="vp-fund-slide--item-title">
                                                    {!! $point['title'] !!}
                                                </div>
                                                <div class="vp-fund-slide--item-value">
                                                    {!! $point['value'] !!}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </swiper-slide>
                @endforeach

                <swiper-slide class="vp-last-slide vp-hidden-mob"></swiper-slide>
            </swiper>
        @endif

            <div class="vp-fund-step-block--ctrl vp-show-mob">
                <div class="vp-swiper-button-prev swiper-button-disabled">
                    <vp-icon type="arrow-left"></vp-icon>
                </div>
                <div id="vp-swiper-pagination2" class="vp-swiper-pagination"></div>
                <div class="vp-swiper-button-next">
                    <vp-icon type="arrow-right"></vp-icon>
                </div>
            </div>
    </div>
</div>