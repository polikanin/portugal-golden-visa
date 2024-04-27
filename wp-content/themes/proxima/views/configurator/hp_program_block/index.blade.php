<div id="{{ $section_id }}"
     class="vp-program-block"
>
    <div class="wrapper">
        <div class="vp-container" style="--progress: 0%;" data-progress>
            <div class="vp-container--left">
                <div class="vp-container--block">
                    @if($title)
                        <h1 class="vp-title">
                            {!! $title !!}
                        </h1>
                    @endif
                    @if(count($program) > 4)
                        <div class="vp-progress"></div>
                    @endif
                    @if($button)
                            @include('components.button', ['button' => $button, 'iconImg' => 'user-tag'])
                    @endif
                    @if($text)
                        <p class="vp-text">
                            {!! $text !!}
                        </p>
                    @endif
                </div>
            </div>
            <div class="vp-container--right" data-progress-container>

                @if($program)
                    <div class="vp-items">
                        @foreach($program as $item)
                            <div class="vp-item">
                                <div class="vp-item--img">
                                    {!! get_image_html($item['icon'], 'full') !!}
                                </div>
                                <div class="vp-item--inner">
                                    <div class="vp-item--title">
                                        {{ $item['title'] }}
                                    </div>
                                    <div class="vp-item--text">
                                        {!! $item['text'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>