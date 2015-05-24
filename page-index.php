<?php
/**
 * Template Name: Index
 **/
?>
<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>


<!-- imagem de destaque -->
<div id="banner-home">
    <?php
    $query = new WP_Query(array('category_name' => 'banner', 'posts_per_page' => 1));
    while ($query->have_posts()) :
    $query->the_post(); ?>

    <?php if (has_post_thumbnail()) : ?>
        <div class="outer">
            <div class="inner">
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/banner-home.png" alt=""
                             class="img-responsive"/> -->
                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>


            </div>

        </div>
        <div class="banner-legenda text-center">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php the_excerpt(); ?></p>
        </div>
        <!--<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('destaques-thumb', array('class' => 'img-responsive')); ?></a>
                <div class="clear"></div> -->
    <?php endif; ?>

    <?php ?>
</div>
<?php endwhile; ?>


<?php /** SLIDER? ONONONONONONO
 * <div class="bs-example" data-example-id="carousel-with-captions">
 * <div id="carousel-example-captions" class="carousel slide  carousel-fade" data-ride="carousel">
 * <ol class="carousel-indicators">
 * <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
 * <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
 * <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
 * </ol>
 * <div class="carousel-inner" role="listbox">
 * <div class="item">
 * <img  alt="900x500" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/banner-home.png" >
 * <div class="carousel-caption">
 * <h3 id="first-slide-label">First slide label<a class="anchorjs-link" href="#first-slide-label"><span class="anchorjs-icon"></span></a></h3>
 * <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
 * </div>
 * </div>
 * <div class="item">
 * <img  alt="900x500" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/banner-home2.png" >
 * <div class="carousel-caption">
 * <h3 id="second-slide-label">Second slide label<a class="anchorjs-link" href="#second-slide-label"><span class="anchorjs-icon"></span></a></h3>
 * <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
 * </div>
 * </div>
 * <div class="item active">
 * <img  alt="900x500" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/banner-home3.png" data-holder-rendered="true">
 * <div class="carousel-caption">
 * <h3 id="third-slide-label">Third slide label<a class="anchorjs-link" href="#third-slide-label"><span class="anchorjs-icon"></span></a></h3>
 * <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
 * </div>
 * </div>
 * </div>
 * <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
 * <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
 * <span class="sr-only">Previous</span>
 * </a>
 * <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
 * <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
 * <span class="sr-only">Next</span>
 * </a>
 * </div>
 * </div>*/ ?>

</div>

<div class="container">
    <!-- start content container -->
    <div id="conteudo-principal" class="row dmbs-content">
        <div class="col-md-9">
            <h2> Destaques</h2>

            <div class="row destaques-home">
                <?php
                $query = new WP_Query(array('category_name' => 'destaques', 'posts_per_page' => 3));
                while ($query->have_posts()) :
                    $query->the_post(); ?>
                    <div class="destaques-item col-md-4 col-sm-4">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('destaques-thumb', array('class' => 'img-responsive')); ?></a>
                            <div class="clear"></div>
                        <?php endif; ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="col-md-3 noticias-home ">
            <h2> Notícias</h2>
            <?php
            $query = new WP_Query(array('category_name' => 'noticias', 'posts_per_page' => 3));
            while ($query->have_posts()) :
                $query->the_post(); ?>
                <div class="noticias-item">
                    <!--<div class="data"><?php the_time('j \d\e F \d\e Y'); ?></div> -->
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <!--<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>-->

                </div>
            <?php endwhile; ?>
            <?php
            // Get the ID of a given category
            $category_id = get_cat_ID('Notícias');
            // Get the URL of this category
            $category_link = get_category_link($category_id);
            ?>
            <!-- Print a link to this category -->
            <span><a href="<?php echo esc_url($category_link); ?>" title="Notícias">Veja mais notícias</a></span>

        </div>

        <div class="clear respiro"></div>
        <div class="col-md-6">
            <h2>Programas Universitários</h2>

            <div class="row programas-unversitarios-home">
                <div class="col-sm-4 col-xs-6 programas-unversitarios-item">
                    <a href="#">
                        <img src="https://placeimg.com/400/330/tech" alt="Imagem de Tecnologia" class="img-responsive"/>
                        <h3>Iniciação Científica</h3>
                    </a>
                </div>

                <div class="col-sm-4 col-xs-6 programas-unversitarios-item">
                    <a href="#">
                        <img src="http://lorempixel.com/400/330/business/" alt="Imagem de Tecnologia" class="img-responsive"/>
                        <h3>Iniciação Científica</h3>
                    </a>
                </div>

                <div class="col-sm-4 col-xs-6 programas-unversitarios-item">
                    <a href="#">
                        <img src="http://lorempixel.com/400/330/technics/" alt="Imagem de Tecnologia" class="img-responsive"/>
                        <h3>Iniciação Científica</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2>Acesso Rápido</h2>

            <div class="row acesso-rapido-home">
                <div class="col-sm-6 acesso-rapido-item">
                    <a href="#" class="btn btn-info btn-lg" role="button">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Biblioteca
                    </a>
                </div>
                <div class="col-sm-6 acesso-rapido-item">
                    <a href="#" class="btn btn-info btn-lg" role="button">
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Ensino à Distância
                    </a>
                </div>
                <div class="col-sm-6 acesso-rapido-item">
                    <a href="#" class="btn btn-info btn-lg" role="button">
                        <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Intranet
                    </a>
                </div>
                <div class="col-sm-6 acesso-rapido-item">
                    <a href="#" class="btn btn-info btn-lg" role="button">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Webmail
                    </a>
                </div>
            </div>
        </div>


    </div>
    <!-- end content container -->
</div>
<!-- end main container -->
<?php get_footer(); ?>

