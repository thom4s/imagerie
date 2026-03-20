


        
        
        <?php $repeater = $args['repeater'];  ?>


<section class="je_bloc_portrait_accueil">
    <div class="wrapper">

        <div>
            <h3 class="je_soustitre_serif"><?php echo $args['title']; ?></h3>
            <div class="je_typo_paragraphe_generique"><?php echo $args['content']; ?></div>
        </div>
 
        <div class="je_bloc_portrait_accueil">
            <div class="columns --three">
                <?php foreach( $repeater as $r ) :
                    $image = $r['module2_vignette'];
                    $legend = $r['module2_legend']; ?>
        
                    <div class="je_conteneur_portrait_individuel">
                        <div class="je_conteneur_image_cercle">
                            <img class="je_image_portrait" src="<?php echo $image; ?>" />
                        </div>
                        <div>
                            <h4 class="je_typo_nom_acteur"><?php echo $legend; ?></h4>
                            <p class="je_typo_soustitre_acteur">
                            Directrice du musée et des expositions
                            </p>
                        </div>

                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>








