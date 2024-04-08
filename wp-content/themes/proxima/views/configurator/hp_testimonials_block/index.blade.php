<div id="{{ $section_id }}"
     class="vp-program_block"
>
    @if($title)
        <h1 class="vp-title">
            {{ $title }}
        </h1>
    @endif

    @if($testimonials)
         <div class="vp-vertical-slider">
                 @foreach($testimonials as $item)
                         <div class="vp-vertical-slide">
                             <div class="vp-vertical-slide--img">
                                 {!! get_image_html($item['icon'], 'full') !!}
                             </div>
                             <div class="vp-vertical-slide--text">
                                 {{ $item['name'] }}
                             </div>
                                 <div class="vp-vertical-slide--title">
                                         {{ $item['title'] }}
                                 </div>
                             <div class="vp-vertical-slide--text">
                                 {{ $item['text'] }}
                             </div>
                         </div>
                 @endforeach
         </div>
    @endif
</div>