<div id="{{ $section_id }}"
     class="vp-x3-slider-block"
>
    <div class="wrapper">
        <div class="vp-x3-slider-block--head">
            <div class="">
                @if($title)
                    <h1 class="vp-title">
                        {!! $title !!}
                    </h1>
                @endif
                @if($subtitle)
                    <div class="vp-text">
                        {!! $subtitle !!}
                    </div>
                @endif
            </div>
            @if($text)
                <div class="vp-text">
                    {!! $text !!}
                </div>
            @endif
        </div>
    </div>

    @if($items)
        <swiper
                :modules="modules"
                :slides-per-view="'auto'"
                :centeredSlides="true"
                :loop="true"
                :autoplay="{
                        delay: 2000,
                        pauseOnMouseEnter: true
                    }"
                @slide-change-transition-end="onSlideChange"
                @slide-change-transition-start="start"
        >
            @foreach($items as $item)
                <swiper-slide>
                    <div class="vp-item" data-badge-slide="badge-x3-slider-block">
                        <div class="vp-item--title">
                            {{ $item['title'] }}
                        </div>
                        <div class="vp-item--text">
                            {!! $item['text'] !!}
                        </div>
                    </div>
                </swiper-slide>
            @endforeach
            @foreach($items as $item)
                <swiper-slide>
                    <div class="vp-item" data-badge-slide="badge-x3-slider-block">
                        <div class="vp-item--title">
                            {{ $item['title'] }}
                        </div>
                        <div class="vp-item--text">
                            {!! $item['text'] !!}
                        </div>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper>
    @endif
</div>