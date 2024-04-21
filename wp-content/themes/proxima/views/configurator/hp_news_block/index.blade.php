<div id="{{ $section_id }}"
     class="vp-news-block"
>
    <div class="wrapper">
        @if($title)
            <h2 class="vp-title">
                {!! $title !!}
            </h2>
        @endif

        @if($news)
            <div class="vp-items">
                @foreach($news as $item)
                    <div class="vp-item">
                        <div class="vp-item--container">
                            @if($item['image'])
                                <div class="vp-item--img">
                                    {!! get_image_html($item['image'], 'full') !!}
                                </div>
                            @endif
                        </div>
                        @foreach($item['blocks'] as $block)
                            <div class="vp-item--container">
                                @if($block['text'])
                                        {!! $block['text'] !!}
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>