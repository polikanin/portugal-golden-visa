<div id="{{ $section_id }}"
     class="vp-steps-block"
>
    <div class="wrapper">
        @if($title)
            <h1 class="vp-title">
                {{ $title }}
            </h1>
        @endif
    </div>

    @if($steps)
        <div class="vp-steps-block--items" style="--count: {{ count($steps) + 1 }}">
            <div class=""></div>
            @foreach($steps as $item)
                <div class="vp-step-slide" style="--index:{{ $loop->index }}">
                    <div class="vp-step-slide--dot"></div>
                    <div class="vp-step-slide--line"></div>
                    @if($item['day_number'])
                        <div class="vp-step-slide--index">
                            {{ $item['day_number'] }}
                        </div>
                    @endif
                    @if($item['day_label'])
                        <div class="vp-step-slide--day">
                            {{ $item['day_label'] }}
                        </div>
                    @endif

                    @if($item['blocks'])
                        <div class="vp-step-slide--body">
                            @foreach($item['blocks'] as $block)
                                <div class="vp-step-slide--block">
                                    @if($block['title'])
                                        <div class="vp-step-slide--title">
                                            {{ $block['title'] }}
                                        </div>
                                    @endif
                                    @if($block['text'])
                                        <div class="vp-step-slide--text">
                                            {{ $block['text'] }}
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>