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
                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            </div>

        </div>
        <div class="banner-legenda text-center">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>

    <?php endif; ?>

    <?php ?>
</div>
<?php endwhile; ?>




<div class="container">
    <!-- start content container -->
    <div id="conteudo-principal" class="row dmbs-content conteudo-principal-estilo ">
        <div class="col-md-9">
            <h2> Destaques</h2>

            <div class="row destaques-home">
                <?php
                $query = new WP_Query(array('category_name' => 'destaques', 'posts_per_page' => 3));
                if($query->have_posts()):
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
                <?php else: ?>
                    <div class="alert alert-warning" role="alert">Ainda não há posts cadastrados na categoria <strong>Destaques</strong></div>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-3 noticias-home ">
            <h2> Notícias</h2>
            <?php
            $query = new WP_Query(array('category_name' => 'noticias', 'posts_per_page' => 3));
            if($query->have_posts()):
            while ($query->have_posts()) :
                $query->the_post(); ?>
                <div class="noticias-item">
                    <!--<div class="data"><?php the_time('j \d\e F \d\e Y'); ?></div> -->
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <!--<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>-->

                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="alert alert-warning" role="alert">Ainda não há posts cadastrados na categoria <strong>Notícias</strong></div>
            <?php endif; ?>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/programa_universitario1.jpg" alt="Imagem de Tecnologia" class="img-responsive"/>
                        <h3>Iniciação Científica</h3>
                    </a>
                </div>

                <div class="col-sm-4 col-xs-6 programas-unversitarios-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/programa_universitario4.jpg" alt="Imagem de Tecnologia" class="img-responsive"/>
                        <h3>Iniciação Científica</h3>
                    </a>
                </div>

                <div class="col-sm-4 col-xs-6 programas-unversitarios-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/programa_universitario3.jpg" alt="Imagem de Tecnologia" class="img-responsive"/>
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

        <div class="clear respiro"></div>



        <div class="col-md-12">
            <h2>Cursos da Graduação</h2>

            <div class="row programas-unversitarios-home">
                <div class="col-sm-4 cursos-graduacao-item">
                    <a href="<?php echo esc_url(home_url()); ?>/ciencia-da-computacao/">
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/ciencia_computacao.jpg" alt="Imagem de um computador com códigos na tela" class="img-responsive"/>
                        <h3>Ciência da Computação</h3>
                    </a>
                </div>

                <div class="col-sm-4 cursos-graduacao-item">
                    <a href="<?php echo esc_url(home_url()); ?>/matematica-computacional/">
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/mat_computacional.jpg" alt="Imagem com materiais de estudo" class="img-responsive"/>
                        <h3>Matemática Computacional</h3>
                    </a>
                </div>

                <div class="col-sm-4 cursos-graduacao-item">
                    <a href="<?php echo esc_url(home_url()); ?>/engenharia-da-computacao/">
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/eng_computacao.jpg" alt="Imagem com peças de hardware" class="img-responsive"/>
                        <h3>Engenharia da Computação</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="clear respiro"></div>
    </div>
    <!-- end content container -->
</div>
<!-- end main container -->
<?php get_footer(); ?>

