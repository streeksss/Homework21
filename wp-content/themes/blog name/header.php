<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>

    <title><?php bloginfo('name');?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="<?php bloginfo('template_directory'); ?>/css/fotorama.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory'); ?>/js/fotorama.js"></script>





    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="h-page">
        <div class="container clearfix">
            <div class="logo">
                <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('logo_image'); ?>" alt="Blog name"/></a>
            </div>
            <img class="search-icon" src="<?php bloginfo('template_directory'); ?>/img/search-icon.png"/>




            <form class="search-main" action="" method="">
            <input class="search" type="text" placeholder="Search" name="s"/>






                <?php
                $args = array(
                    'theme_location' => 'header',

                );
                ?>

                <?php wp_nav_menu($args); ?>
        </div>
    </header>