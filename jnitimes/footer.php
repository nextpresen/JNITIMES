<div id="overlay"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script type="text/javascript">
(function($) {
    $(function () {
        $('.sub-menu').on({
            'mouseenter': function () {
                $(this).addClass('is-active');
            },
            'mouseleave': function () {
                $(this).removeClass('is-active');
            }
        });
        $('#nav-toggle,#overlay').on('click', function() {
            $('body').toggleClass('open');
        });
    });
})(jQuery);
</script>
    <?php wp_footer();?>
</body>
</html>