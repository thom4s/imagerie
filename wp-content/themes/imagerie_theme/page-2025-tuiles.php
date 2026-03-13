<?php 
    /* template Name: Tuiles Promotion 2025 */
get_header('2025');
wp_enqueue_script('mosaic-script');

    wp_enqueue_style('nuage-blocs');
    wp_enqueue_style('nuage-elements');
    wp_enqueue_style('nuage-generic');
    wp_enqueue_style('nuage-modules');

$args = array(
'post_type' => 'tuile',
);
$the_query = new WP_Query( $args );

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="wrapper">
            <div class="">


                    
            <div class="je_bouton_fonce_position">
                <div class="je_bouton_fonce">
                    <a href="nuage.html">Basculez côté musée</a>
                </div>
            </div>

            <div class="je_titre_module_position">
                <h3 class="je_titre_generique_module"><?php the_title(); ?></h3>
            </div>

            <div id="module_tuiles_mosaique">
                <div id="tile-container" data-tiles-number="<?php echo $the_query->found_posts?>"></div>
            </div>

            <div class="je_bloc_mosaique_bas">
                <div class="je_bloc_mosaique_bas_texte">
                    <h3 class="je_typo_gras_gris">
                    Cliquez sur une tuile pour en découvrir plus
                    </h3>
                </div>
                <div class="je_bouton_octogone_mosaique">
                    <a id="form-trigger" href="formulaire.html">
                    <img class="je_bouton_octogone" src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/bouton_plus.png"
                    /></a>

                    <h4 class="je_typo_paragraphe_generique">
                        Une idée à partager ? Cliquez ici pour rajouter votre propre tuile au
                    mosaïque !
                    </h4>
                </div>
            </div>



            <!-- CONTAINER DES TUILES -->
                <?php if ( $the_query->have_posts() ) : ?>
                        <?php 
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post(); 
                                get_template_part('Components/2025/popin', 'tile'); 
                        
                        endwhile; ?>

                <?php endif; wp_reset_postdata(); ?>
                
                <?php get_template_part('Components/2025/popin', 'form'); ?>

            </div>
        </section>



<?php endwhile;
endif; ?>
<?php get_footer('2025'); ?>