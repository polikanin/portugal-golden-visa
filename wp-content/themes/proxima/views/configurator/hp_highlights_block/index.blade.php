<div id="{{ $section_id }}"
     class="vp-highlights_block"
>
    @if($title)
        <h1 class="vp-title">
            {{ $title }}
        </h1>
    @endif

    @if($highlights)
        <div class="vp-vertical-slider">
            @foreach($highlights as $highlight)
                <div class="vp-vertical-slide--title">
                    {{ $highlight['title'] }}
                </div>
                <div class="vp-vertical-slide--text">
                    {{ $highlight['text'] }}
                </div>

                @foreach($highlight['items'] as $item)
                                <div class="vp-vertical-slide--text">
                                        {{ $item['title'] }}
                                </div>
                                <div class="vp-vertical-slide--text">
                                        {{ $item['text'] }}
                                </div>
                @endforeach
            @endforeach
        </div>
    @endif


</div>