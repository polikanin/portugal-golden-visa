<div id="{{ $section_id }}"
     class="vp-successful_block"
     @if($background) style="background-image: url('{{ $background['url'] }}')" @endif
>
    @if($title)
        <h1 class="vp-title">
            {{ $title }}
        </h1>
    @endif
    @if($text)
        <p class="vp-text">
            {{ $text }}
        </p>
    @endif

    @if($items)
        <div class="vp-items">
            @foreach($items as $item)
                <div class="vp-item">
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