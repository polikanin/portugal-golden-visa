<div id="{{ $section_id }}"
     class="vp-program_block"
>
    @if($title)
        <h1 class="vp-title">
            {{ $title }}
        </h1>
    @endif
    @if($subtitle)
        <p class="vp-subtitle">
            {{ $subtitle }}
        </p>
    @endif
    @if($text)
        <p class="vp-text">
            {{ $text }}
        </p>
    @endif

    @include('components.button', ['button' => $button])

    @if($program)
        <div class="vp-vertical-slider">
            @foreach($program as $item)
                <div class="vp-vertical-slide">
                    <div class="vp-vertical-slide--text">
                        {{ $item['text'] }}
                    </div>
                    <div class="vp-vertical-slide--title">
                        {{ $item['title'] }}
                    </div>
                    <div class="vp-vertical-slide--img">
                        {!! get_image_html($item['icon'], 'full') !!}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>