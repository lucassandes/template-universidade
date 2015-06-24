<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<div class="container">

    <!-- start content container -->
    <div class="row dmbs-content">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main categorias" id="conteudo-principal">
            <h2><?php single_cat_title(); ?></h2>

            <div class="row">
                <?php // theloop
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="col-md-3 col-sm-4">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('categorias-thumb', array('class' => 'img-responsive alignleft')); ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="col-md-9 col-sm-8 ">
                        <?php else: ?>
                                <div class="col-md-12">
                        <?php endif; ?>
                            <h3>
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                                   rel="bookmark"><?php the_title(); ?></a>
                            </h3>
                            <?php get_template_part('template-part', 'postmeta'); ?>
                            <?php the_excerpt(); ?>
                            <?php wp_link_pages(); ?>
                        </div>

                    </div>
                    <div class="clear"></div>
                    <hr/>


                <?php endwhile; ?>
                    <?php posts_nav_link(); ?>
                <?php else: ?>

                    <?php get_404_template(); ?>

                <?php endif; ?>
            </div>
        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar('right'); ?>

    </div>
    <!-- end content container -->
</div>
<!-- end main container -->
<?php get_footer(); ?>

