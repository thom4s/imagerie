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
        </div>


    <?php $defs = $word['module9_definition_mot']; ?>

    <div class="je_titre_module_position">
      <h3 class="je_titre_generique_module"><?php echo $word['mot']; ?></h3>
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
                    <?php echo $def['module9_form_question']; ?>
                  </h3>
                </div>

                <div class="je_popup_mots_texte_conteneur">
                  <p class="je_typo_generique_paragraphe je_popup_mots_texte_detail">
                    <?php echo $def['module9_reponse_text']; ?>
                  </p>
                </div>
              </div>

        <?php }} ?>
      



      <div class="je_popup_mots_position">
        <div class="je_popup_mots_position_image">
          <img
            class="je_popup_mots_image_taille"
            src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/square_hexa.png"
          />
          <h3 class="je_typo_blanc_gras je_popup_mots_position_texte">
            En quoi ça concerne le musée?
          </h3>
        </div>

        <div class="je_popup_mots_texte_conteneur">
          <p class="je_typo_generique_paragraphe je_popup_mots_texte_detail">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure
          </p>
        </div>
      </div>
      <div class="je_popup_mots_position">
        <div class="je_popup_mots_position_image">
          <img
            class="je_popup_mots_image_taille"
            src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/square_circle.png"
          />
          <h3 class="je_typo_blanc_gras je_popup_mots_position_texte">
            Quel impact sur la scénographie ?
          </h3>
        </div>

        <div class="je_popup_mots_texte_conteneur">
          <p class="je_typo_generique_paragraphe je_popup_mots_texte_detail">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure
          </p>
        </div>
      </div>
      <div class="je_popup_mots_position">
        <div class="je_popup_mots_position_image">
          <img
            class="je_popup_mots_image_taille"
            src="<?php echo get_template_directory_uri(); ?>/img/vingtcinq/square_star.png"
          />
          <h3 class="je_typo_blanc_gras je_popup_mots_position_texte">
            Le mot des scénographes
          </h3>
        </div>

        <div class="je_popup_mots_texte_conteneur">
          <p class="je_typo_generique_paragraphe je_popup_mots_texte_detail">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure
          </p>
        </div>
      </div>
    </div>



            <div class="keyword_item">

                    <?php if( have_rows('definition_mot') ): ?>
                        <div class="keyword_popin hidden columns --free">

                            <?php while( have_rows('definition_mot') ) : the_row();

                                $forme = $word['forme']; 
                                $question = $word['questions']; 
                                $reponse = $word['response'];  ?>
                                    <div class="">
                                        <img src="<?php echo $forme['url']; ?>">
                                        <h3><?php echo $question; ?></h3>
                                        <?php echo $reponse; ?>
                                    </div>
                            <?php endwhile; ?>
                        </div>

                    <?php endif; ?>
                </div>

    </div>
</div>

