<footer class="dmbs-footer" id="footer">
    <div class="container">
        <div class="col-sm-4 footer-info">
            <p><strong>Universidade Federal Fictícia</strong></p>

            <p>Avenida Marginal Leste, 1421<br/>
                São José dos Campos - SP<br/>
              </p>
            <p>contato@universidade.com.br<br/>
           (12) 3900-0000</p>

        </div>

        <div class="col-sm-4">

            <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-universidade-small.png"
                 alt="Logo Universidade" class="img-responsive center-block"/>
                -->
            <p class="text-center hidden-xs"><strong><?php bloginfo( 'name' ); ?></strong> nas redes sociais</p>
            <div class="center-icons ">
                <ul class="soc">
                    <li><a class="soc-facebook" href="#"><span class="hidden">Facebook</span></a></li>
                    <li><a class="soc-twitter" href="#"><span class="hidden">Twiiter</span></a></li>
                    <li><a class="soc-google" href="#"></a><span class="hidden">Google +</span></li>
                    <li><a class="soc-linkedin" href="#"></a><span class="hidden">Linkedin</span></li>
                    <li><a class="soc-rss soc-icon-last" href="<?php bloginfo('rss2_url'); ?>"><span
                                class="hidden">RSS</span></a></li>
                </ul>


            </div>
        </div>

        <div class="col-sm-4 text-right">
            <p class="back-to-top"><a href="#topo"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span> Voltar ao topo</a></p>


        </div>
        <div class="clear"></div>

        <?php
    global $dm_settings;
    if ($dm_settings['author_credits'] != 0) : ?>
        <div class="col-md-12 credits">
            <p>Tema Wordpress desenvolvido por <a href="http://lucassandes.com" target="_blank">Lucas Sandes</a>,
                baseado no tema <a href="https://wordpress.org/themes/devdmbootstrap3/" target="_blank">DevDmBootstrap3</a> de <a href="http://devdm.com/" target="_blank">Danny Machal</a> (com a devida autorização do autor) </p>
        </div>
    <?php endif;  ?>
    </div>
    <?php get_template_part('template-part', 'footernav'); ?>
</footer>



<?php wp_footer(); ?>


</body>
</html>

