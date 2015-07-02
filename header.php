<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>

    <!-- Alto contraste -->
    <link rel="stylesheet"  type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css"  title="Default" />
    <link rel="alternate stylesheet"  type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/alto-contraste.css"  title="alto-contraste" />
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/styleswitcher.js"></script>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Redes sociais. Créditos:  www.addthis.com/dashboard  -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-558725595d95e7d0" async="async"></script>


</head>
<body <?php body_class(); ?> id="topo">



