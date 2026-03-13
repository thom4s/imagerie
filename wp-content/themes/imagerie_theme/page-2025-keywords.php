<?php 
    /* template Name: Mots clés Promotion 2025 */
    get_header('2025'); 
    wp_enqueue_style('nuage-blocs');
    wp_enqueue_style('nuage-elements');
    wp_enqueue_style('nuage-generic');
    wp_enqueue_style('nuage-modules');
    
    wp_enqueue_script('nuage-script');

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div class="wrapper">

        <div class="je_bouton_fonce_position">
            <div class="je_bouton_fonce">
                <a href="mosaique.html">Basculez côté public</a>
            </div>
        </div>

        <div class="je_titre_module_position">
            <h3 class="je_titre_generique_module"><?php the_title(); ?></h3>
        </div>

        <div class="je_nuage_soustitre">
            <h3 class="je_typo_gras_gris">
                Cliquez sur un mot <br />
                pour en découvrir plus...
            </h3>
        </div>



    <?php $rows = get_field('module9_mots'); ?>


        <div class="je_nuage_parent_conteneur">
            <div class="je_mot_column">
                <div class="je_mot_conteneur_style je_mot_conteneur_1_1">
                    <p class="keyword_trigger je_typo_blanc_gras" data-id="0"><?php echo $rows[0]["module9_mot"]; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_1_2">
                    <p class="keyword_trigger je_typo_blanc_gras" data-id="1"><?php echo isset($rows[1]) ? $rows[1]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_1_3">
                    <p class="keyword_trigger je_typo_blanc_gras" data-id="2"><?php echo isset($rows[2]) ? $rows[2]["module9_mot"] : ''; ?></p>
                </div>
            </div>
            <div class="je_mot_column">
                <div class="je_mot_conteneur_style je_mot_conteneur_2_1">
                    <p class="keyword_trigger je_typo_blanc_gras" data-id="3"><?php echo isset($rows[3]) ? $rows[3]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_2_2">
                    <p class="keyword_trigger je_typo_blanc_gras" data-id="4"><?php echo isset($rows[4]) ? $rows[4]["module9_mot"] : ''; ?></p>
                </div>
            </div>
            <div class="je_mot_column">
                <div class="je_mot_conteneur_style je_mot_conteneur_3_1">
                    <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[5]) ? $rows[5]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_3_2">
                <div class="je_mot_conteneur_style je_mot_conteneur_3_2_1">
                    <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[6]) ? $rows[6]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_3_2_2">
                    <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[7]) ? $rows[7]["module9_mot"] : ''; ?></p>
                </div>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_3_3">
                <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[8]) ? $rows[8]["module9_mot"] : ''; ?></p>
                </div>
            </div>
            <div class="je_mot_column">
                <div class="je_mot_conteneur_style je_mot_conteneur_4_1">
                <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[9]) ? $rows[9]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_4_2">
                <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[10]) ? $rows[10]["module9_mot"] : ''; ?></p>
                </div>
            </div>
            <div class="je_mot_column">
                <div class="je_mot_conteneur_style je_mot_conteneur_5_1">
                    <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[11]) ? $rows[11]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_5_2">
                    <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[12]) ? $rows[12]["module9_mot"] : ''; ?></p>
                </div>
                <div class="je_mot_conteneur_style je_mot_conteneur_5_2">
                    <p class="keyword_trigger je_typo_blanc_gras"><?php echo isset($rows[13]) ? $rows[13]["module9_mot"] : ''; ?></p>
                </div>
            </div>
        </div>

        <?php if( $rows ) : ?>

            <?php foreach( $rows as $key => $value ) : ?>

                <?php get_template_part('Components/2025/popin', 'keyword', array(
                    'id' => $key,
                    'word' => $value
                )); ?>
                
            <?php endforeach; ?>

        <?php endif; ?>



    </div>


<?php endwhile;
endif; ?>
<?php get_footer('2025'); ?>