




    <section class="je_conteneur_acceuil_full_width" style="background-color: <?php echo $args['bg_color']; ?>">
      <div class="">

        <div class="wrapper">
            <h3 class="je_soustitre_serif"><?php echo $args['title']; ?></h3>
            <h4 class="je_soustitre_serif_italique">
            Retrouvez les notions clés du projet
            </h4>
        </div>

        <div class="wrapper <?php echo $args['image'] ? 'columns' : ''; ?>">
            <div>
                <p class="je_typo_paragraphe_generique">
                <?php echo $args['content']; ?>
                </p>
                <div class="je_bouton_fonce">
                    <a href="<?php echo $args['btn_url']; ?>">><?php echo $args['btn_label']; ?></a>
                </div>
            </div>

            <div>
                <img
                    class="je_image_conteneur_full_width"
                    src="<?php echo $args['image']; ?>"
                />
            </div>
        </div>

      </div>

    </section>





