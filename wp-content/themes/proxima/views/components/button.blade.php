@if($button && $button['url'])
    @if(strpos($button['url'], '##') !== false)
        <button class="{{ $class? : 'test' }}">
            {{ $button['title'] }}
        </button>
    @else
        <a
                class="{{ $class? : 'test' }}"
                href="{{ $button['url'] }}"
                {{ ( $button['target'] ) ? 'target="_blank"' : '' }}
        >
            {{ $button['title'] }}
        </a>
    @endif
@endif