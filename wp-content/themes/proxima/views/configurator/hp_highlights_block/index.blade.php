<div id="{{ $section_id }}"
     class="vp-highlights-block"
>
    <div class="wrapper">
        @if($title)
            <h1 class="vp-title">
                {!! $title !!}
            </h1>
        @endif

        @if($highlights)
            <div class="vp-items">
                @foreach($highlights as $highlight)
                    <div class="vp-item">
                        <div class="vp-item--head">
                            <div class="vp-item--title">
                                {{ $highlight['title'] }}
                            </div>
                            <div class="vp-item--subtitle">
                                {!! $highlight['description'] !!}
                            </div>
                        </div>

                        <div class="vp-item--body">
                            @foreach($highlight['items'] as $item)
                                <div class="vp-item--block">
                                    <div class="vp-item--quote">
                                        {{ $item['title'] }}
                                    </div>
                                    <div class="vp-item--text">
                                        {!! $item['text'] !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>