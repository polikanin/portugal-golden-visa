<div id="{{ $section_id }}"
     class="vp-timelines-block"
>
    <div class="wrapper">
        @if($title)
            <h1 class="vp-title">
                {!! $title !!}
            </h1>
        @endif
        @if($text)
            <p class="vp-text">
                {!! $text !!}
            </p>
        @endif
    </div>
    @if($timelines)
        <div class="vp-table">
            @foreach($timelines as $timeline)
                <div class="vp-table--body">
                    <div class="vp-table--head">
                        <div class="wrapper">
                            <div class="vp-table--head-inner">
                                <div class="vp-table--col">
                                    <div class="vp-table--index">
                                        @if($loop->index + 1 < 10)
                                            0
                                        @endif
                                        {{ $loop->index + 1 }}
                                    </div>
                                </div>
                                <div class="vp-table--col">
                                    <div class="vp-table--heading">
                                        {{ $timeline['name'] }}
                                    </div>
                                </div>
                                <div class="vp-table--col">

                                </div>
                            </div>
                        </div>
                    </div>
                    @if($timeline['steps'])
                        @foreach($timeline['steps'] as $item)
                            <div class="vp-table--row">
                                <div class="wrapper">
                                    <div class="vp-table--row-inner">
                                        <div class="vp-table--col">
                                            <div class="vp-table--title">
                                                {{ $item['duration'] }}
                                            </div>
                                            <div class="vp-table--quote">
                                                {{ $item['quote'] }}
                                            </div>
                                        </div>
                                        <div class="vp-table--col">
                                            <div class="vp-table--title">
                                                {!! $item['title'] !!}
                                            </div>
                                        </div>
                                        <div class="vp-table--col">
                                            <div class="vp-table--text">
                                                {!! $item['text'] !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>