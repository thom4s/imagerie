


<div class="tuile_item hidden popin parent" data-id="<?php the_ID(); ?>" data-img="<?php echo get_the_post_thumbnail_url(); ?>">

    <div class="inner">

        <div class="je_popup_tuile_haut">
            <button class="je_bouton-croix close_my_parent">
                <img src="images/bouton croix.png" />
            </button>
                
            <div class="je_pictogrammes_popup">
                <img src="images/Fioritures bleu.png" />
            </div>
            <div class="je_bouton_fonce">
                <a href="formulaire.html">Créer une tuile</a>
            </div>
        </div>



        <div class="je_popup_tuile_hexagones">
            <div class="je_popup_tuile_image">
                <img class="je_tuile_filler_image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
            </div>
            <div class="je_popup_tuile_texte">
                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                <p class="je_popup_tuile_texte_filler">
                <?php the_content(); ?>
                </p>
            </div>
        </div>

        <div class="je_popup_tuile_bas">
        <div class="je_popup_tuile_bouton_like_position">
            <div class="je_coeur_vide"></div>
            <div
            id="je_popup_tuile_bouton_like"
            class="like je_coeur_rempli je_fond_transparent"
            ></div>

            <p class="je_typo_gras_gris je_like_texte">Like</p>
        </div>

        <div class="je_popup_tuile_texte_bas">
            <p class="je_typo_gras_gris">
            Une idée, un commentaire à partager ? Rajoutez votre propre tuile !
            </p>
        </div>
        </div>

    </div>

</div>

