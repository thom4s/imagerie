

        
        
        <?php $repeater = $args['repeater'];  ?>


<section class="je_bloc_portrait_accueil">
    <div class="wrapper">

        <div>
            <h3><?php echo $args['title']; ?></h3>
            <div class="je_typo_paragraphe"><?php echo $args['content']; ?></div>
        </div>
 
        <div class="je_bloc_portrait_accueil">
            <div class="columns --free">
                <?php foreach( $repeater as $r ) :
                    $image = $r['module2_vignette'];
                    $legend = $r['module2_legend']; ?>
        
                <div>
                    <img class="je_Bondil" src="<?php echo $image; ?>"></img>
                    <div><?php echo $legend; ?></div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>








