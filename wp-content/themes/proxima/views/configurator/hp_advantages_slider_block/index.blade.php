<div id="{{ $section_id }}"
     class="vp-advantages-block"
>


    <div class="wrapper">
        @if($title)
            <h2 class="vp-title">
                {!! $title !!}
            </h2>
        @endif
        @if($subtitle)
            <h2 class="vp-subtitle">
                {!! $subtitle !!}
            </h2>
        @endif
    </div>

    @if($items)
        <div class="vp-hidden-md">
        <horizontal-x3-v2-slider
                @open-modal="modal.id = $event"
                :slides="{{ json_encode($items) }}"
        ></horizontal-x3-v2-slider>
        </div>

        <div class="vp-items vp-show-md">
            @foreach($items as $item)
                <div class="vp-item">
                    <div class="vp-item--inner">
                        <div class="vp-item--text">
                            {!! $item['text'] !!}
                        </div>
                        <div class="vp-item--title">
                            {{ $item['value'] }}
                        </div>
                    </div>
                    <div class="">
                        <div class="vp-item--img">
                            <img src="{{ $item['image'] }}" alt="pic">
                        </div>
                        <vp-button @click.prevent="modal.id ='##quiz'">
                            <span class="vp-btn--text">{{ $item['link']['title'] }}</span>
                        </vp-button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>