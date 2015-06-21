<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
    <div class="container">


        <!-- start content container -->

        <div class="row dmbs-content">

            <?php //left sidebar ?>
            <?php get_sidebar('left'); ?>

            <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

                <h2><?php _e('Desculpe-nos, página não econtrada', 'devdmbootstrap3'); ?></h2>

                <h3> A Página que você tentou acessar não existe ou foi apagada. Que tal usar a busca? </h3>

                <div class="clear respiro"></div>
                <div class="search-404">
                    <form role="search" method="get" id="searchform" class="searchform"
                          action="<?php echo home_url('/'); ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" class="search-field" name="s" id="s" accesskey="3"
                                   placeholder="<?php echo esc_attr_x('Faça sua busca aqui...', 'placeholder') ?>"
                                   title="<?php echo esc_attr_x('Faça sua busca aqui...', 'label') ?>"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" type="button"><span
                                                    class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                     </span>

                        </div>
                    </form>
                </div>


                <div class="clear respiro"></div>
                <h3>Se preferir, use um dos links rápidos abaixo</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"> Ir para Página Inical </a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>fale-conosco"> Fale Conosco </a></li>

                </ul>

            </div>

            <?php //get the right sidebar ?>
            <?php get_sidebar('right'); ?>

        </div>
        <!-- end content container -->
    </div>
    <!-- end main container -->
<?php get_footer(); ?>