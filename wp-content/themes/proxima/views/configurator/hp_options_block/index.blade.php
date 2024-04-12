<div id="{{ $section_id }}"
     class="vp-options-block"
>
    <div class="wrapper">
        <div class="vp-container">
            <div class="vp-container--left">
                <div class="">
                    @if($title)
                        <h1 class="vp-title">
                            {{ $title }}
                        </h1>
                    @endif
                    @include('components.button', ['button' => $button, 'icon' => 'export'])
                </div>
                <div class="">
                    @if($subtitle)
                        <p class="vp-subtitle">
                            {{ $subtitle }}
                        </p>
                    @endif
                    @if($text)
                        <div class="vp-text">
                            {!! $text !!}
                        </div>
                    @endif
                </div>
            </div>
            <div class="vp-container--right">
                @if($program)
                    <vertical-x3-slider :slides="{{ json_encode($program) }}"></vertical-x3-slider>
                @endif
            </div>
        </div>
    </div>
</div>