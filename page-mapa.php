<?php
/**
 * Template Name: Mapa do Site
 **/
?>
<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<!-- start content container -->
<div class="container">


    <!-- start content container -->
    <div class="row dmbs-content">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main" id="conteudo-principal">

            <?php // theloop
            if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h2 class="page-header"><?php the_title(); ?></h2>


                <?php the_content(); ?>
                <?php wp_link_pages(); ?>

                <div class="col-sm-6">
                    <h3>Páginas</h3>
                    <ul>
                        <?php wp_list_pages('title_li='); ?>
                    </ul>

                </div>
                <div class="col-sm-6">
                    <h3>Categorias</h3>
                    <ul>
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </div>
                <div class="clear"></div>
                <?php //Comentários estão desabilitados ?>
                <?php //comments_template(); ?>

            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar('right'); ?>

    </div>
    <!-- end content container -->
</div>

<!-- end main container -->
<?php get_footer(); ?>

