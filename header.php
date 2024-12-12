<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>
    <style>
        #subheader {
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/background/subheader.jpg') top fixed;
        }
    </style>
</head>

<body id="homepage" class="de-navbar-left">

    <div id="wrapper">
        <div class="container-fluid-fluid">
            <div class="row g-0">
                <div id="de-sidebar" class="col-lg-3 col-md-12">

                    <!-- header begin -->
                    <header class="side-header">

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->


                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo home_url();?>">
                                <!-- Primary Logo (148x150) -->
                                <img class="logo" src="<?php echo esc_url(get_theme_mod('primary_logo', get_template_directory_uri() . '/assets/images/logo-2.png')); ?>" alt="Primary Logo">

                                <!-- Secondary Logo (212x48) -->
                                <img class="logo-2" src="<?php echo esc_url(get_theme_mod('secondary_logo', get_template_directory_uri() . '/assets/images/logo-border.png')); ?>" alt="Secondary Logo">
                            </a>


                        </div>
                        <!-- logo close -->



                        <!-- mainmenu begin -->
                        <nav>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main_menu', // Registered menu location.
                                'menu_id'        => 'mainmenu',  // ID for the `<ul>` element.
                                'container'      => false,       // No additional container element.
                                'menu_class'     => 'menu',      // Class for the `<ul>` element.
                            ));
                            ?>
                        </nav>



                        <div class="h-content">
                            <div class="social-icons-2">
                                <?php if (get_theme_mod('facebook_url')): ?>
                                    <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank">
                                        <i class="fa fa-facebook fa-lg"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('twitter_url')): ?>
                                    <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank">
                                        <i class="fa fa-twitter fa-lg"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('instagram_url')): ?>
                                    <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" target="_blank">
                                        <i class="fa fa-instagram fa-lg"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('google_plus_url')): ?>
                                    <a href="<?php echo esc_url(get_theme_mod('google_plus_url')); ?>" target="_blank">
                                        <i class="fa fa-google-plus fa-lg"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('rss_url')): ?>
                                    <a href="<?php echo esc_url(get_theme_mod('rss_url')); ?>" target="_blank">
                                        <i class="fa fa-rss fa-lg"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>



                    </header>
                    <!-- header close -->


                </div>