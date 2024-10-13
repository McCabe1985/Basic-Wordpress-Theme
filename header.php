<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme 1</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="app-container">

        <!--navbar-->
        <nav class="nav-container">
            <nav class="navbar-logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/logo.svg" alt="" class="navbar-logo">
            </nav>
            <div class="desktop-navlinks-container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'desktop-nav', // This matches the registered location
                    'container' => false,
                    'menu_class' => 'desktop-navlinks-container',
                    'fallback_cb' => false
                ));
                ?>
            </div>
            <button class="mobile-navbar-toggle">
                <img class="close-nav-button disappear" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/x.svg" alt="">
                <img class="open-nav-button" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/hamburger.svg" alt="">
            </button>
        </nav>