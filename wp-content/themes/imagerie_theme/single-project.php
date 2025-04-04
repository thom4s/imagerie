<?php get_header(); 
wp_enqueue_style('project-style'); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php $themes = get_field('project_themes_themes_list');  ?>



<section class= "modale" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"> 
    <a href="/" class="containerback">← Retour sur le site</a>

    <div class="overlay">
        <div class="container">
            <h1 class= "title2"><?php the_title(); ?></h1>
            
            <div class="textsubtitle2">
                <?php the_content();  ?>
            </div>

            <div class="containerbutton">
                <a id="show_swiper" href="#" class="nextbutton">COMMENCER</a>
            </div>
        </div>
    </div>
</section>  




<div id="swiper_container" class="swiper hidden">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <?php foreach($themes as $k => $theme ) : ?>
            <?php $theme_objets = $theme['theme_objets']; ?>
            <?php $theme_about = $theme['en_savoir_plus']; ?>


            <div class="swiper-slide">
                <div id="theme_<?php echo $k; ?>" class="theme" class="">

                    <div class="theme_title">
                        <?php echo $theme['title_theme']; ?>
                    </div>
                    
                    <img class="theme_bg" src="<?php echo $theme['theme_background']; ?>" />

                    <div class="theme_objects">
                        <?php foreach($theme_objets as $l => $object ) : ?>

                            <button id="objet_<?php echo $k; ?>_<?php echo $l; ?>" class="objet" data-objectid="<?php echo $k; ?>_<?php echo $l; ?>">
                                <?php echo $object->post_title; ?>
                                <?php echo get_the_post_thumbnail($object->ID); ?>
                            </button>

                            <div id="modal_<?php echo $k; ?>_<?php echo $l; ?>" class="theme_modal containerframe hidden">
                                
                                    <div class="containerlabel">
                                        <button id="close" class="buttonclose js-close">x</button>

                                        <div class="img_container">
                                            <img class="label" src="<?php the_field('object_media', $object->ID); ?>">
                                        </div>

                                        <div class="containerlabel-frame">

                                            <h1><?php the_field('object_title', $object->ID); ?></h1>
                                            <h2><?php the_field('object_cartel_short', $object->ID); ?></h2>
                                        
                                            <div class= "scrollbutton">
                                                <?php the_field('object_cartel_long', $object->ID); ?>
                                            </div>
                                        
                                        </div>
                                    </div>

                            </div><!-- .theme_modal -->
                    

                        <?php endforeach; ?>
                    </div><!-- .theme_objects -->


                    <button id="about_trigger" class="about_trigger">En savoir plus</button>


                    <div id="about_<?php echo $k; ?>" class="theme_about frametheme hidden"> 
                        <a href="#" class="backbutton js-close">&#8592; Retour </a>
        
                        <div class="band">
                            <img src="<?php echo $theme_about['bandeau_image']; ?>" alt="Bandeau">
                            <h1><?php echo $theme_about['title']; ?></h1>
                        </div>
                    
                        <div class="intro"> 
                            <?php echo $theme_about['theme_explicatif']; ?>
                        </div>
                    
                        <div class="containervideo">

                            <div class= textvideo>
                                <?php echo $theme_about['theme_development']; ?>
                            </div>
                        </div>
                    </div><!-- .theme_about -->

                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>







<?php endwhile;
endif; ?>

<?php get_footer(); ?>