


<div id="tile-form" class="hidden popin parent" data-id="<?php the_ID(); ?>" data-img="<?php echo get_the_post_thumbnail_url(); ?>">

    <div class="inner">

        <div class="je_popup_tuile_haut">
                <button class="je_bouton-croix close_my_parent">
                    <img src="images/bouton croix.png" />
                </button>
            <div class="je_pictogrammes_popup">
                <img src="images/Fioritures bleu.png" />
            </div>
            <div class="je_bouton_fonce">
                <a href="formulaire.html">Valider ma tuile</a>
            </div>
        </div>
        


        <div class="je_champdetexte_prenom_position">
            <h3 class="je_typo_gras_gris je_champdetexte_prenom">
                Écrivez votre prénom :
            </h3>

            <div class="je_prenom_input_conteneur">
                <input
                class="je_input je_prenom_input"
                type="text"
                name="nom"
                placeholder="Votre nom"
                />
            </div>
        </div>

        <div class="je_formulaire_hexagones">
            <div class="je_formulaire_hexagone_image_outer">
                <div class="je_formulaire_hexagone_image_inner">
                    <p class="je_typo_gras_noir">Partagez une image</p>
                    <img src="images/bouton plus.png" />
                </div>
            </div>

            <div class="je_formulaire_hexagone_texte">
                <div class="je_formulaire_hexagone_texte_inner">
                <p class="je_typo_gras_noir">Partagez une remarque</p>
                <div class="je_remarque_input_conteneur">
                    <input
                    class="je_input je_remarque_input"
                    type="text"
                    name="remarque"
                    placeholder="Votre remarque"
                    />
                </div>
                </div>
            </div>
        </div>


    </div>
</div>

