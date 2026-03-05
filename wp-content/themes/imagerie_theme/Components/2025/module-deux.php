

        
        
        <?php $repeater = $args['repeater'];  ?>


<section class="je_bloc_portrait_accueil">
    <div class="wrapper">

        <div>
            <h3><?php echo $args['title']; ?></h3>
            <p><?php echo $args['content']; ?></p>
        </div>
 
        <div class="je_bloc_portrait_accueil">
            <div class="columns">
                <?php foreach( $repeater as $r ) :
                    $image = $r['module2_vignette'];
                    $legend = $r['module2_legend']; ?>
        
                <div>
                    <img class="je_Bondil" src="<?php echo $image; ?>"></img>
                    <p><?php echo $legend; ?></p>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>








