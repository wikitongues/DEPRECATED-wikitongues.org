<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WIKITONGUES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="v8uy-CWkyGvY7z_lmWLbzdKjTQ4N3SFbof9zcqZYKs0" />
        <link rel="shortcut icon" href="http://fredericoandrade.com/faviconV3.ico"/>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <script src="<?php bloginfo('url'); ?>/wp-content/themes/wikitongues/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php wp_head(); ?>
    </head>
    <?php global $post; ?>
    <body class="<?php echo $post->post_name; if ( is_front_page() ) : echo ' home'; endif; ?>" <?php //body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <nav>
                <a href="<?php bloginfo('url'); ?>" class="logo">
                    <div class="icon"></div>
                    <p>Wikitongues</p>
                </a>
                <ul>
                    <?php wp_list_pages('exclude=2,358&orderby=menu_order&title_li='); ?>
                </ul>
            </nav>
        </header>