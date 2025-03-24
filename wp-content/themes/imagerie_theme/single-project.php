<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php $themes = get_field('project_themes_themes_list');  ?>

<?php the_post_thumbnail(); ?>
<?php the_title(); ?>
<?php the_content();  ?>

<a id="show_swiper" href="#">Commencer</a>




<div id="swiper_container" class="swiper hidden">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <?php foreach($themes as $k => $theme ) : ?>

            <div class="swiper-slide">
                <div id="theme_<?php echo $k; ?>" class="theme" class="">

                    <?php echo $theme['title_theme']; ?>
                    <img class="theme_bg" src="<?php echo $theme['theme_background']; ?>" />
                    <?php $theme_objets = $theme['theme_objets']; ?>
                    <?php $theme_about = $theme['en_savoir_plus']; ?>


                    <div class="theme_objects">
                        <?php foreach($theme_objets as $l => $object ) : ?>
                            <button id="objet_<?php echo $l; ?>" class="objet">
                                <?php echo $object->post_title; ?>
                                <?php echo get_the_post_thumbnail($object->ID); ?>
                            </button>

                            <div id="modal_<?php echo $k; ?>_<?php echo $l; ?>" class="theme_modal hidden">
                                <button class="close">Fermer</button>
                                <?php echo $object->post_title; ?>
                                <img src="<?php the_field('object_media', $object->ID); ?>">
                                <?php the_field('object_title', $object->ID); ?>
                                <?php the_field('object_cartel_short', $object->ID); ?>
                                <?php the_field('object_cartel_long', $object->ID); ?>
                            </div>
                    

                        <?php endforeach; ?>
                    </div>

                    <button id="about_trigger" class="about_trigger">En savoir plus</button>

                    <div id="about_<?php echo $k; ?>" class="theme_about hidden">
                        <button class="close">Fermer</button>
                        <img src="<?php echo $theme_about['bandeau_image']; ?>" alt="">
                        <h1><?php echo $theme_about['title']; ?></h1>
                        <?php echo $theme_about['theme_explicatif']; ?>
                        <?php echo $theme_about['theme_development']; ?>
                    </div>


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