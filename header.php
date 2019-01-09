<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Make this iOS compatible -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-web-content-title" content="La Pizzeria Restaurant">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri?>/apple-touch-icon.png">

    <!-- Make this iOS compatible -->
    <meta name="theme-color" content="#a61206">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="La Pizzeria Restaurant">
    <link rel="icon" type="img/png" href="<?php echo get_template_directory_uri()?>/icon.png" sizes="192x192">

    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                <?php 
                    if(function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logoimage">
                </a>
            </div>   <!-- .logo -->
        <div class="header-information">
            <div class="social-menu">
                <?php 
                    $args = array(
                        'theme_location' => 'social-menu',
                        'container' => 'nav',
                        'container_class' => 'social-menu',
                        'container_id' => 'socials',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>'
                    );
                    wp_nav_menu($args);
                ?>
            </div> <!-- Social Menu -->
            <div class="address">
                <p><?php echo esc_html(get_option('lapizzeria_location')); ?></p>
                <p>Phone Number: +<?php echo esc_html(get_option('lapizzeria_phonenumber')); ?></p>
            </div>
        </div><!-- .header Information -->
        </div><!-- .container -->
    
    </header>
    <div class="main-menu">
        <div class="mobile-menu">
            <a href="#"><i class="fas fa-bars"></i>Menu</a>
        </div>
        <div class="navigation container">
            <?php 
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'site-nav'
                );
            ?>
            <nav class="site-nav">
                <?php wp_nav_menu($args); ?>
            </nav>
            
        </div>
    </div>