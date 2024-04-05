<div id="{{ $section_id }}"
     class="vp_hello_block"
     @if($bg) style="background-image: url('{{ $bg['url'] }}')" @endif
>
    @if($title)
        <h1 class="vp_title">
            {{ $title }}
        </h1>
    @endif

    @if($text)
        <p class="vp_text">
            {{ $text }}
        </p>
    @endif

    @if($link)
        <a
                href="{{ $link['url'] }}"
                {{ ( $link['target'] ) ? 'target="_blank"' : '' }}
        >
            {{ $link['title'] }}
        </a>
    @endif


</div>