</main>

<?php global $blade; ?>

<?php echo $blade->run( 'layouts.footer.index' ); ?>

<?php wp_footer(); ?>

<?php get_css_js(); ?>

<script>
    window.addEventListener('load', function () {

        let time_delay;

        time_delay = 0;

        setTimeout(function () {
            let link = document.createElement('link')
            link.href = '/wp-content/themes/proxima/assets/css/font.css'
            link.rel = 'stylesheet';
            link.media = 'all';
            document.getElementsByTagName('head')[0].appendChild(link);
        }, time_delay);

    });
</script>

</body>
</html>