<?php 
    /* template Name: Tuiles Promotion 2025 */
get_header();
wp_enqueue_script('mosaic-script');
wp_enqueue_style('nuage-style');

$args = array(
'post_type' => 'tuile',
);
$the_query = new WP_Query( $args );

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="the_content">
            <div class="the_content_inner">

                <h1><?php the_title(); ?></h1>

                <div class="module_haut_mosaique">
                    <div class="bloc_retour">
                        <a href="index.html"> <img class="bouton_fleche" src="" /></a>
                        <h4>Retour</h4>
                    </div>
                    <a href="nuage.html" class="bouton_fonce">Bascule côté musée</a>
                    <h3>Cliquez sur une tuile pour en découvrir plus</h3>
                </div>


                <!-- CONTAINER DES TUILES -->
                <?php if ( $the_query->have_posts() ) : ?>
                    <section class="hidden">
                    
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="tuile_item">
                                <?php the_post_thumbnail(); ?>
                                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; ?>

                    </section>

                    <div id="module_tuiles_mosaique">
                        <div id="tile-container" data-tiles-number="<?php echo $the_query->found_posts?>"></div>
                    </div>
                <?php endif; wp_reset_postdata(); ?>


                <!-- TRIGGER DU FORMULAIRE -->
                <div class="bloc_mosaique_bas">
                    <a id="form-trigger"href="formulaire.html"> 
                        <img class="bouton_octogone" src="" />
                        <h4>
                            Une idée à partager ? Cliquez ici pour rajouter votre propre tuile au mosaïque !
                        </h4>
                    </a>
                </div>

                
                <!-- FORMULAIRE -->
                <div id="tile-form" class="wysiwyg hidden">
                    <?php the_content(); ?>
                </div>
                

            </div>
        </section>



<?php endwhile;
endif; ?>
<?php get_footer(); ?>