<?php
$projects = $args['projects'];
var_dump($projects);


if( $projects ) :
    foreach( $projects as $p ) :

        var_dump($p);

        $title = $p['post_title'];
        $content = $p['post_content'];
    ?>


        <?php echo $title; ?>
        <?php echo $content; ?>

        
    <?php endforeach; ?>
<?php endif; ?>
