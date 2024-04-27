<div id="cookie-notice" role="dialog"
     aria-label="{{$options['aria_label']}}"
     class="cookie-revoke-hidden cn-position-bottom cn-effect-fade cookie-notice-visible"
>
    <div class="cookie-notice-container">

        <div class="cookie-notice-title">
            ATTENTION:
        </div>

        <div class="cookie-notice-text">
            {{$options['see_more'] ? do_shortcode( $options['message_text'] ) : $options['message_text'] }}
        </div>

        <div class="cookie-notice-footer">
            <a href="" class="cookie-notice-more">
                More information
            </a>

            @include('components.button', ['button' => [
    'url'=> '##',
             'title' => $options['accept_text']
             ], 'add_class' => 'cn-set-cookie',])

            @include('components.button', ['button' => [
    'url'=> '##',
             'id' => 'cn-close-notice',
             'title' => 'Reject',
             ], 'class' => 'vp-btn--simple',])
        </div>
    </div>
</div>