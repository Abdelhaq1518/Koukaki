<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'foce'); ?>
        </a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <div class="boutonBurger">
                    <span></span>
                </div>
                <ul>
                    <li class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </li>
                </ul>
            </nav><!-- #site-navigation -->

            <section class="menu-items fullScreen">
                <div class="menu-items_container">
                    <img class="logoMenu"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logoMenu.png'; ?>"
                        alt="logo menu fullscreen">
                    <img id="kawaneko"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/kawaneko.png'; ?>"
                        alt="Chat violet">
                    <img id="jaakuna" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/jaakuna.png'; ?>"
                        alt="Chat noir">
                    <img id="orenjiro"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orenjiro.png'; ?>"
                        alt="Chat orange">
                    <img id="menuSunFlower"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>"
                        alt="Fleur blanche">
                    <img id="menuOrchid"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>"
                        alt="Orchid violette">
                    <img id="menuHibiscus"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus.png'; ?>"
                        alt="Hibiscus">
                    <img id="menuRandomFlower"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>"
                        alt="petite Fleur violette">
                    <img id="menuOrangeFlower"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>"
                        alt="petite Fleur orange">
                    <ul class="liste">
                        <li><a href="#story"><span class="animationTitre2">Histoire</span></a></li>
                        <li><a href="#characters"><span class="animationTitre2">Personnages</span></a></li>
                        <li><a href="#place"><span class="animationTitre2">Lieu</span></a></li>
                        <li><a href="#studio"><span class="animationTitre1">Studio</span><span
                                    class="animationTitre2">&nbsp;Koukaki</span></a></li>
                    </ul>
                    <p class="studioMenu">STUDIO KOUKAKI</p>
                </div>
            </section>
        </header><!-- #masthead -->