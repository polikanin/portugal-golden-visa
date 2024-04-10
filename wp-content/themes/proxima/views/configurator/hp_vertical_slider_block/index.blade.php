<div id="{{ $section_id }}"
     class="vp-vertical-slider-block"
>
    <div class="wrapper">
        @if($title)
            <h2 class="vp-title">
                {{ $title }}
            </h2>
        @endif
        @if($subtitle)
            <p class="vp-subtitle">
                {{ $subtitle }}
            </p>
        @endif
        @if($image)
            {!! get_image_html($image, 'full') !!}
        @endif

        <vertical-slider :slides="{{ json_encode($slider) }}"></vertical-slider>
    </div>
</div>