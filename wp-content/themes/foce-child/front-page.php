<?php get_header(); ?>

<main id="primary" class="site-main">

    <section class="banner parallax">
        <div class="parallax__layer">
            <video class="banner-video" autoplay muted loop>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/video.mp4'; ?>"
                    type="video/mp4">
            </video>

            <img class="banner-fallback" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>"
                alt="Fallback Image">
        </div>

        <img id="floatingLogo" class="banner-logo"
            src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"
            alt="logo Fleurs d'oranger & chats errants">
    </section>


    <section id="story" class="story fade-in">
        <div class="containerTitleSection1">
        <h2><span class="title-part1">L'</span><span class="title-part2">histoire</span></h2>  
        </div>
        <article id="" class="story__article">
            <p>
                <?php echo get_theme_mod('story'); ?>
            </p>
        </article>


        <!--Ajout du slider des personnages!-->
        <?php get_template_part('templates-parts/slider'); ?>

        <!-- fin ajout du slider des personnages!-->
        </div>
        </article>
        <article id="place" class="fade-in">
            <div>
            <h3><span class="title-part1">Le</span><span class="title-part2">&nbsp;lieu</span></h3>  
                <p>
                    <?php echo get_theme_mod('place'); ?>
                </p>
            </div>
            <div class="nuage-container big-cloud-container" id="nuage1">
                <img class="big-cloud"
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png' ?>"
                    alt="grand nuage">
            </div>
            <div class="nuage-container little-cloud-container" id="nuage2">
                <img class="little-cloud"
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png' ?>"
                    alt="petit nuage">
            </div>

    </section>
    <section id="studio" class="fade-in">
        <div class="containerTitleSection2">
        <h2><span class="title-part1">Studio</span><span class="title-part2">&nbsp;Koukaki</span></h2>  
        </div>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et
                distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux
                sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur
                incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et
                capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>

    </section>
    <!--Ajout de la section nomination!-->
    <?php get_template_part('templates-parts/nomination'); ?>

    <!-- fin ajout de la section nomination!-->
</main><!-- #main -->

<?php
get_footer(); ?>