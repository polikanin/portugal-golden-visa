<div id="{{ $section_id }}"
     class="vp-advantages-block"
>
    <div class="wrapper">
        @if($title)
            <h1 class="vp-title">
                {{ $title }}
            </h1>
        @endif
    </div>

    @if($items)
        <swiper
                :modules="modules"
                :slides-per-view="7"
                :centeredSlides="true"
                :loop="true"
        >
            @foreach($items as $item)
                <swiper-slide>
                    <div class="vp-item">
                        <div class="vp-item--text">
                            {{ $item['text'] }}
                        </div>
                        <div class="vp-item--title">
                            {{ $item['value'] }}
                        </div>
                        <div class="vp-item--img">
                            {!! get_image_html($item['image'], 'full') !!}
                        </div>
                        @if($item['link'])
                            @include('components.button', ['button' => $item['link']])
                        @endif
                    </div>
                </swiper-slide>
            @endforeach
            @foreach($items as $item)
                <swiper-slide>
                    <div class="vp-item">
                        <div class="vp-item--text">
                            {{ $item['text'] }}
                        </div>
                        <div class="vp-item--title">
                            {{ $item['value'] }}
                        </div>
                        <div class="vp-item--img">
                            {!! get_image_html($item['image'], 'full') !!}
                        </div>
                        @if($item['link'])
                            @include('components.button', ['button' => $item['link']])
                        @endif
                    </div>
                </swiper-slide>
            @endforeach
        </swiper>
    @endif
</div>