

        
        
    <?php $bg = $args['bg'];  ?>
    <?php $repeater = $args['repeater'];  ?>



    <section class="je_conteneur_acceuil_full_width_video" style="background-color: <?php echo $bg; ?>">
        <div class="wrapper">
            <h3 class="je_soustitre_serif je_soustitre_videos">LES VOIX DU PROJET</h3>
        </div>
        <div class="wrapper je_conteneur_thumbnail">
            <?php foreach( $repeater as $r ) :
                        $iframe = $r['module3__iframe'];
                        $legend = $r['module3_content']; ?>
                
                <div class="je_video_couverture">
                    <div><?php echo $iframe; ?></div>
                    <div><?php echo $legend; ?></div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>







