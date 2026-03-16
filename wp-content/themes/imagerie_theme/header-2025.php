<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:wght@300&family=Roboto+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">

        <div id="container">
            <main id="content" role="main">
                

                <header class="je_header">
                    <div class="je_header_gauche">
                        <div class="je_bouton_retour">
                            <a href="index.html">
                                <img class="je_image_fleche" src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/arrow.png" />
                                <p class="je_typo_blanc_gras">Retour</p>
                            </a>
                        </div>
                        <div class="je_header_pictogrammes">
                            <img src="<?php the_field('header_header_simbolos', 'options'); ?>" />
                            <img src="<?php the_field('header_header_simbolos', 'options'); ?>" />
                            <img src="<?php the_field('header_header_simbolos', 'options'); ?>" />
                        </div>
                    </div>

                    <div class="je_header_logo">
                        <a href="https://www.imarabe.org/fr">
                        <img src="<?php the_field('header_header_logo_ima', 'options'); ?>" />
                        </a>
                    </div>
                </header>
