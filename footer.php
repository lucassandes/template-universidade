
<div class="dmbs-footer footer">
    <div class="text-center">
        Creditos
    </div>
    <?php /*
    global $dm_settings;
    if ($dm_settings['author_credits'] != 0) : ?>
        <div class="row dmbs-author-credits">
            <p class="text-center"><a href="<?php global $developer_uri;
                echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by', 'devdmbootstrap3') ?> Danny
                    Machal</a></p>
        </div>
    <?php endif; */?>

    <?php get_template_part('template-part', 'footernav'); ?>
</div>



<?php wp_footer(); ?>
<script>
    //toogle stylesheet
    var style = 0;
    function swapStyleSheet() {

        if (style == 0) {
            document.getElementById('pagestyle').setAttribute('href', '<?php echo get_stylesheet_directory_uri(); ?>/css/alto-contraste.css');
            style = 1;
            //console.log(style);
        }

        else {
            document.getElementById('pagestyle').setAttribute('href', '<?php echo get_stylesheet_directory_uri(); ?>/css/default.css');
            style = 0;
            //console.log(style);
        }

    }

    //center big images
  /*  jQuery("#banner-home >img").each(function(i, img) {
        jQuery(img).css({
            position: "relative",
            left: (jQuery(img).parent().width() - jQuery(img).width()) / 2
        });
    });*/
</script>
</body>
</html>

