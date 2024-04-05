<div id="{{ $section_id }}"
     class="vp-definition-block"
     @if($bg) style="background-image: url('{{ $bg['url'] }}')" @endif
>
    @if($title)
        <h1 class="vp_title">
            {{ $title }}
        </h1>
    @endif

    @if($items)
        <div class="items">
            @foreach($items as $item)
                <div class="item">
                    <div class="item--text">
                        {{ $item['text'] }}
                    </div>
                    <div class="item--img">
                        {!! get_image_html($item['icon'], 'full') !!}
                    </div>
                </div>
            @endforeach
        </div>
    @endif


</div>