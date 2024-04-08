<div id="{{ $section_id }}"
     class="vp-steps-block"
>
    @if($title)
        <h1 class="vp-title">
            {{ $title }}
        </h1>
    @endif

    @if($steps)
        <div class="vp-vertical-slider">
            @foreach($steps as $item)
                @if($item['day_number'])
                    <div class="vp-vertical-slide--title">
                        {{ $item['day_number'] }}
                    </div>
                @endif
                @if($item['day_label'])
                    <div class="vp-vertical-slide--text">
                        {{ $item['day_label'] }}
                    </div>
                @endif

                @foreach($item['blocks'] as $block)
                    <div class="vp-vertical-slide">
                        @if($block['title'])
                            <div class="vp-vertical-slide--title">
                                {{ $block['title'] }}
                            </div>
                        @endif
                        @if($block['text'])
                            <div class="vp-vertical-slide--text">
                                {{ $block['text'] }}
                            </div>
                        @endif
                    </div>
                @endforeach
            @endforeach
        </div>
    @endif
</div>