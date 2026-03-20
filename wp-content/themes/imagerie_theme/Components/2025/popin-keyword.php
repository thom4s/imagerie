<?php $word = $args['word'];  ?>

<div class="keyword hidden popin parent" data-id="<?php echo $args['id']; ?>">
    <div class="inner">

        <div class="je_popup_tuile_haut">
            <button class="je_bouton-croix close_my_parent">
                <img src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/bouton_close.png" />
            </button>
                
            <div class="je_pictogrammes_popup">
                <img src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/simbolos.png" />
            </div>

            <span></span>
        </div>


        <?php $defs = $word['module9_definition_mot']; ?>

        <div class="je_titre_module_position">
          <h3 class="je_titre_generique_module"><?php echo $word['module9_mot']; ?></h3>
        </div>

        <div class="je_popup_mots_module_position">

            <?php if( $defs ) { foreach( $defs as $def ) { ?>
                  <div class="je_popup_mots_position">
                    <div class="je_popup_mots_position_image">
                      <img
                        class="je_popup_mots_image_taille"
                        src="<?php echo $def['module9_form_question']; ?>"
                      />
                      <h3 class="je_typo_blanc_gras je_popup_mots_position_texte">
                        <?php echo $def['module9_question_text']; ?>
                      </h3>
                    </div>

                    <div class="je_popup_mots_texte_conteneur">
                      <p class="je_typo_generique_paragraphe je_popup_mots_texte_detail">
                        <?php echo $def['module9_reponse_text']; ?>
                      </p>
                    </div>
                  </div>

            <?php }} ?>
          
        </div>

    </div>
</div>

