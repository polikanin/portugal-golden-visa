@push('css')
    <style>
        @font-face {
            font-family: 'Outfit';
            src: url('/wp-content/themes/proxima/assets/fonts/Outfit-Light.woff') format('woff');
            font-weight: 300;
            font-display: swap;
        }

        @font-face {
            font-family: 'Outfit';
            src: url('/wp-content/themes/proxima/assets/fonts/Outfit-Regular.woff') format('woff');
            font-weight: 400;
            font-display: swap;
        }

        @font-face {
            font-family: 'Outfit';
            src: url('/wp-content/themes/proxima/assets/fonts/Outfit-Medium.woff') format('woff');
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: 'Mulish';
            src: url('/wp-content/themes/proxima/assets/fonts/Mulish-Medium.woff') format('woff');
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gilroy';
            src: url('/wp-content/themes/proxima/assets/fonts/Gilroy-Medium.woff') format('woff');
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gilroy';
            src: url('/wp-content/themes/proxima/assets/fonts/Gilroy-Regular.woff') format('woff');
            font-weight: 400;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gilroy';
            src: url('/wp-content/themes/proxima/assets/fonts/Gilroy-Bold.woff') format('woff');
            font-weight: 700;
            font-display: swap;
        }

    </style>
@endpush

@php($phone_code = get_field('phone_code', 'options'))
@php($timelines = get_field('timeline', 'options'))
@php($error_messages = get_field('error_messages', 'options'))
@php($form_fields = get_field('form_fields', 'options'))

<script>
    window.VpPhoneCode = [
            @foreach($phone_code as $code)
        {
            value: '{{$code['value']}}',
            mask: '{{$code['mask']}}',
            placeholder: '{{$code['placeholder']}}',
            icon: '{{$code['icon']}}',
        },
        @endforeach
    ]
    window.VpTimeline = [
            @foreach($timelines as $timeline)
        {
            value: '{{$timeline['value']}}',
            mask: '{{$timeline['mask']}}',
        },
        @endforeach
    ]
    window.VpErrorMsg = {
        @foreach($error_messages as $msg)
                {{ $msg['label'] }}: '{!! $msg['text'] !!}',
        @endforeach
    }
    window.VpFormFields = {
        @foreach($form_fields as $field)
                {{ $field['label'] }}: [
            @foreach($field['values'] as $val)
                    '{!! $val['text'] !!}',
            @endforeach
        ],
        @endforeach
    }
</script>

<div id="vp-app">
    <header class="vp-header">
        <div class="wrapper">
            <div class="vp-container">
                @php($image = get_field('logo', 'options'))

                <a href="/" class="vp-logo">
                    {!! get_image_html($image, 'full') !!}
                </a>

                {!! wp_nav_menu( [
                    'theme_location'  => 'primary',
                    'menu_id'         => 'header-menu',
                    'container_class' => 'vp-menu',
                    'depth'           => 2,
                ] ); !!}

                @include('components.button', ['button' => [
                    'url'=> '##quiz',
                    'title' => 'Speak with an expert'
                    ], 'class' => 'vp-btn--simple',])

                <button class="vp-menu-btn"
                        :class="{active: isMenu}"
                        @click.prevent="toggleMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>