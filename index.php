<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<div class="container">


    <!-- start content container -->
    <div class="row dmbs-content">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main" id="conteudo-principal">

            <?php

            //if this was a search we display a page header with the results count. If there were no results we display the search form.
            if (is_search()) :

                $total_results = $wp_query->found_posts;

                echo "<h2 class='page-header'>" . sprintf(__('%s Resultados da busca para "%s"', 'devdmbootstrap3'), $total_results, get_search_query()) . "</h2>";

                if ($total_results == 0) :
                    get_search_form(true);
                endif;

            endif;

            ?>

            <?php // theloop
            if (have_posts()) : while (have_posts()) : the_post();

                // single post
                if (is_single()) : ?>

                    <div <?php post_class(); ?>>

                        <h2 class="post-header"><?php the_title(); ?></h2>
                        <?php get_template_part('template-part', 'postmeta'); ?>


                        <div class="social-net">
                            <?php //social net gerado automaticamente por www.addthis.com ?>
                            <div class="addthis_native_toolbox"></div>
                        </div>

                        <?php /*if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                                <div class="clear"></div>
                            <?php endif;*/ ?>
                        <?php if (has_excerpt()) : ?>
                            <div class="resumo">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="clear"></div>
                        <?php endif; ?>

                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
                        <?php get_template_part('template-part', 'tags'); ?>


                        <div class="social-net">
                            <?php //social net gerado automaticamente por www.addthis.com ?>
                            <div class="addthis_native_toolbox"></div>
                        </div>
                        <?php //Comentários Desabilitados ?>
                        <?php //comments_template(); ?>

                    </div>
                <?php
                // list of posts
                else : ?>
            <div <?php post_class('categorias'); ?>>
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

                <?php endif; ?>

            <?php endwhile; ?>
                <?php posts_nav_link(); ?>
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

