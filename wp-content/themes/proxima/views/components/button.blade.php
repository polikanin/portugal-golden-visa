@if($button && $button['url'])
    @if(strpos($button['url'], '##') !== false)
        <div class="{{ $class? : 'vp-btn' }} {{$add_class}}" @click.prevent="modal.id = '{{ $button['url'] }}'">
            <button class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--up">
                @if($iconId)
                    <span class="vp-icon">
                        {!! get_svg_content($iconId) !!}
                    </span>
                @endif
                @if($iconImg)
                    <vp-icon type="{{ $iconImg }}"></vp-icon>
                @endif
                {{ $button['title'] }}
            </button>
            <button class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--down {{$add_class}}">
                @if($iconId)
                    <span class="vp-icon">
                        {!! get_svg_content($iconId) !!}
                    </span>
                @endif
                @if($iconImg)
                    <vp-icon type="{{ $iconImg }}"></vp-icon>
                @endif
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
                @if($iconId)
                    <span class="vp-icon">
                        {!! get_svg_content($iconId) !!}
                    </span>
                @endif
                @if($iconImg)
                    <vp-icon type="{{ $iconImg }}"></vp-icon>
                @endif
                {{ $button['title'] }}
            </a>
            <a
                    class="{{ $class? : 'vp-btn' }}--inner {{ $class? : 'vp-btn' }}--down"
                    href="{{ $button['url'] }}"
                    {{ ( $button['target'] ) ? 'target="_blank"' : '' }}
            >
                @if($iconId)
                    <span class="vp-icon">
                        {!! get_svg_content($iconId) !!}
                    </span>
                @endif
                @if($iconImg)
                    <vp-icon type="{{ $iconImg }}"></vp-icon>
                @endif
                {{ $button['title'] }}
            </a>
        </div>
    @endif
@endif