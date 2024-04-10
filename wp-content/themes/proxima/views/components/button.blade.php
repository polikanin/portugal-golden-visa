@if($button && $button['url'])
    @if(strpos($button['url'], '##') !== false)
        <div class="{{ $class? : 'vp-btn' }}">
            <button class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--up">
                {{ $button['title'] }}
            </button>
            <button class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--down">
                {{ $button['title'] }}
            </button>
        </div>
    @else
        <div class="{{ $class? : 'vp-btn' }}">
            <a
                    class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--up"
                    href="{{ $button['url'] }}"
                    {{ ( $button['target'] ) ? 'target="_blank"' : '' }}
            >
                {{ $button['title'] }}
            </a>
            <a
                    class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--down"
                    href="{{ $button['url'] }}"
                    {{ ( $button['target'] ) ? 'target="_blank"' : '' }}
            >
                {{ $button['title'] }}
            </a>
        </div>
    @endif
@endif