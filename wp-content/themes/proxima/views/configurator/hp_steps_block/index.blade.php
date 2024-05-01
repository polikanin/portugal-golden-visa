<div id="{{ $section_id }}"
     class="vp-steps-block"
>
    <div class="wrapper">
        <div class="vp-steps-block--head">
            @if($title)
                <h1 class="vp-title">
                    {!! $title !!}
                </h1>
            @endif

            <div class="vp-steps-block--ctrl">
                <div class="vp-swiper-button-prev">
                    <vp-icon type="arrow-left"></vp-icon>
                </div>
                <div class="vp-swiper-button-next">
                    <vp-icon type="arrow-right"></vp-icon>
                </div>
            </div>
        </div>

        @if($steps)
            <swiper
                    :slides-per-view="'auto'"
                    :space-between="64"
                    :modules="modules"
                    :navigation="{
        nextEl: '.vp-swiper-button-next',
        prevEl: '.vp-swiper-button-prev',
      }"
            >
                @foreach($steps as $item)
                    <swiper-slide>
                        <div class="vp-step-slide">
                            @if($item['day_number'])
                                <div class="vp-step-slide--index" data-step-btn="{{ $loop->index }}">
                                    {{ $item['day_number'] }}
                                </div>
                            @endif
                            @if($item['day_label'])
                                <div class="vp-step-slide--day">
                                    {{ $item['day_label'] }}
                                </div>
                            @endif

                            @if($item['blocks'])
                                <div class="vp-step-slide--body">
                                    @foreach($item['blocks'] as $block)
                                        <div class="vp-step-slide--block">
                                            @if($block['title'])
                                                <div class="vp-step-slide--title">
                                                    {{ $block['title'] }}
                                                </div>
                                            @endif
                                            @if($block['text'])
                                                <div class="vp-step-slide--text">
                                                    {{ $block['text'] }}
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </swiper-slide>
                @endforeach
                <swiper-slide style="width: 811px"></swiper-slide>
            </swiper>
        @endif
    </div>
</div>