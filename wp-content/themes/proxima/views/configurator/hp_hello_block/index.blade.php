<div id="{{ $section_id }}"
     class="vp-hello-block"
     @if($bg) style="background-image: url('{{ $bg['url'] }}')" @endif
>
    <div class="wrapper">
        <div class="vp-hello-block--grid">
            <div class="vp-hello-block--col">
                @if($title)
                    <h1 class="vp-title">
                        {{ $title }}
                    </h1>
                @endif
            </div>
            <div class="vp-hello-block--col">

            </div>
            <div class="vp-hello-block--col">

            </div>
            <div class="vp-hello-block--col">
                <div class="vp-hello-block--content">
                    @if($text)
                        <p class="vp-text">
                            {{ $text }}
                        </p>
                    @endif

                    @if($link)
                        @include('components.button', ['button' => $link])
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>