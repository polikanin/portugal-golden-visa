<div id="{{ $section_id }}"
     class="vp-testimonials-block"
>
    <div class="wrapper">
        @if($testimonials)
            <horizontal-x3-slider :title="'{{ $title }}'" :slides="{{ json_encode($testimonials) }}"></horizontal-x3-slider>
        @endif
    </div>
</div>