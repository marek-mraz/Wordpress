<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    
    <!-- Load WordPress Standard Header -->
    <?php wp_head(); ?>

    <!-- Your Old Styles - Paths updated to point to theme folder -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,700"/>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/custom.css'>
    
    <!-- NOTE: Some external scripts like componentator.com might not work in WP without conflict resolution -->
    <!-- <boostrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <!-- <jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- <popper -->
     <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
     <!-- <bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
     <!-- <bootstrap -->
    <style>
       /* Paste the CSS from your <style> tag here (from .w-text a to .siteIcon) */
    </style>
</head>
<body <?php body_class(); ?>>

<div class="body-inner">
    <header id="header" data-transparent="false" data-fullwidth="true">
        <div class="header-inner">
            <div class="container">
                <div id="logo">
                    <a href="<?php echo home_url(); ?>" style="text-transform: lowercase;">Animatorka.sk</a>
                </div>
                <!-- Mobile Menu Trigger -->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!-- Main Menu -->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <?php
                            if ( has_nav_menu( 'header-menu' ) ) {
                                wp_nav_menu( array(
                                    'theme_location' => 'header-menu',
                                    'container'      => false,
                                    'menu_class'     => '',
                                    'items_wrap'     => '<ul>%3$s</ul>',
                                    'depth'          => 2
                                ) );
                            } else {
                                ?>
                                <ul>
                                    <li><a href="https://www.zdravotnicka.sk/">Chceš sa stať zdravotníkom?</a></li>
                                    <li><a href="<?php echo site_url('/registracia'); ?>">Registracia</a></li>
                                </ul>
                                <?php
                            }
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<main class="main">