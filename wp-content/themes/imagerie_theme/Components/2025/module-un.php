

<section class="je_bloc_paragraphe_accueil" style="background-color: <?php echo $args['bg_color']; ?>">
    <div class="wrapper">

      <div class="columns <?php echo $args['inversed'][0]; ?>">

        <div>
            <div>
                <h3 class="je_titre_generique"><?php echo $args['title']; ?></h3>
                <h3 class="je_soustitre_generique">
                    Retrouvez les notions clés du projet
                </h3>
            </div>
            
            <div>
                <p class="je_typo_paragraphe">
                    <?php echo $args['content']; ?>
                </p>

                <a href="<?php echo $args['btn_url']; ?>" class="je_bouton_decouvrir">
                    <img class="je_iconeleft" src="flèche.png" />
                    <span><?php echo $args['btn_label']; ?></span>
                </a>
                    
            </div>
        </div>

        <div class="je_presentation_nuage_image">
            <img src="<?php echo $args['image']; ?>" alt="Illustration du nuage">
        </div>

      </div>
    </div>
</section>	




