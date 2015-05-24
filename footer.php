<footer class="dmbs-footer" id="footer">
    <div class="container">
        <div class="col-sm-4">
            <p><strong>Universidade Federal Fictícia</strong></p>

            <p>Avenida Marginal Leste, 1421<br/>
                São José dos Campos - SP<br/>
                12000-000</p>

        </div>

        <div class="col-sm-4">

            <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-universidade-small.png"
                 alt="Logo Universidade" class="img-responsive center-block"/>
                -->
            <div class="center-icons ">
                <ul class="soc">
                    <li><a class="soc-facebook" href="#"><span class="hidden">Facebook</span></a></li>
                    <li><a class="soc-twitter" href="#"><span class="hidden">Twiiter</span></a></li>
                    <li><a class="soc-google" href="#"></a><span class="hidden">Google +</span></li>
                    <li><a class="soc-linkedin" href="#"></a><span class="hidden">Linkedin</span></li>
                    <li><a class="soc-rss soc-icon-last" href="<?php bloginfo('rss2_url'); ?>"><span class="hidden">RSS</span></a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-4 text-right">
            <p><strong>Universidade Federal Fictícia</strong></p>

            <p>Avenida Marginal Leste, 1421<br/>
                São José dos Campos - SP<br/>
                12000-000</p>

        </div>
        <?php /*
    global $dm_settings;
    if ($dm_settings['author_credits'] != 0) : ?>
        <div class="row dmbs-author-credits">
            <p class="text-center"><a href="<?php global $developer_uri;
                echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by', 'devdmbootstrap3') ?> Danny
                    Machal</a></p>
        </div>
    <?php endif; */ ?>
    </div>
    <?php get_template_part('template-part', 'footernav'); ?>
</footer>



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

</script>
</body>
</html>

