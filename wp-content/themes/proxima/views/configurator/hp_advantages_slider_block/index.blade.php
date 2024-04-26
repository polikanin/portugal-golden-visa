<div id="{{ $section_id }}"
     class="vp-advantages-block"
>


    <div class="wrapper">
        @if($title)
            <h1 class="vp-title">
                {{ $title }}
            </h1>
        @endif
        @if($subtitle)
            <h2 class="vp-subtitle">
                {!! $subtitle !!}
            </h2>
        @endif
    </div>

    @if($items)
        <horizontal-x3-v2-slider
                @open-modal="modal.id = $event"
                :slides="{{ json_encode($items) }}"
        ></horizontal-x3-v2-slider>
    @endif
</div>