<div id="{{ $section_id }}"
     class="vp-4-items-block"
     @if($background) style="background-image: url('{{ $background['url'] }}')" @endif
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
                        <div class="vp-item--inner">
                            <div class="vp-item--title">
                                {{ $item['title'] }}
                            </div>
                            <div class="vp-item--text">
                                {{ $item['text'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>