<div id="{{ $section_id }}"
     class="vp_advantages_block"
>
    @if($title)
        <h1 class="vp_title">
            {{ $title }}
        </h1>
    @endif
    @if($subtitle)
        <p class="vp_subtitle">
            {{ $subtitle }}
        </p>
    @endif
    @if($image)
        {!! get_image_html($image, 'full') !!}
    @endif

    @if($slider)
        <div class="vp-vertical-slider">
            @foreach($slider as $slide)
                <div class="vp-vertical-slide">
                    @if($slide['text'])
                        <div class="vp-vertical-slide--text">
                            {{ $slide['text'] }}
                        </div>
                    @endif
                    @if($slide['title'])
                        <div class="vp-vertical-slide--title">
                            {{ $slide['title'] }}
                        </div>
                    @endif
                    @if($slide['image'])
                        <div class="vp-vertical-slide--img">
                            {!! get_image_html($slide['image'], 'full') !!}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif


</div>