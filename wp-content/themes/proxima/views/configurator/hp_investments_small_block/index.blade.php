<div id="{{ $section_id }}"
     class="vp-investments-sm-block"
     @if($bg) style="background-image: url('{{ $bg['url'] }}')" @endif
>
    <div class="wrapper">
        @if($title)
            <h1 class="vp-title">
                {{ $title }}
            </h1>
        @endif

        @if($items)
            <div class="vp-items">
                @foreach($items as $item)
                    <div class="vp-item">
                        <div class="vp-item--container">
                            <div class="vp-item--left">
                                @if($item['title'])
                                    <div class="vp-item--title">
                                        {!! $item['title'] !!}
                                    </div>
                                @endif
                                @if($item['text'])
                                    <div class="vp-item--text">
                                        {!! $item['text'] !!}
                                    </div>
                                @endif
                                @if($item['link'])
                                        @include('components.button', ['button' => $item['link']])
                                @endif
                            </div>
                            <div class="vp-item--right">
                                <div class="vp-item--index">
                                    @foreach(range(1, $loop->index + 1) as $i)
                                        <span></span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>