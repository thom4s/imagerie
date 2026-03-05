

        
        
    <?php $bg = $args['bg'];  ?>
    <?php $repeater = $args['repeater'];  ?>


<section class="je_module_video_accueil" style="background-color: <?php echo $bg; ?>">
	<div class="wrapper">
		<h3 class="je_titre_generique">XXXXXXXX</h3>
	</div>
	
    <div class="position_videos wrapper">

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








