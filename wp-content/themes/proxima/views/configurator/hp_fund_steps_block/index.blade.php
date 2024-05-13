<div id="{{ $section_id }}"
     class="vp-fund-step-block"
>
    <div class="wrapper">
        @if($slider)
                <fund-slider
                            @open-modal="modal.id = $event"
                            :title="`{{ $title }}`"
                            :id="`{{ $section_id }}`"
                            :subtitle="`{{ $subtitle }}`"
                            :link="{{ json_encode($link) }}"
                            :slides="{{ json_encode($slider) }}"
                ></fund-slider>
        @endif
    </div>
</div>