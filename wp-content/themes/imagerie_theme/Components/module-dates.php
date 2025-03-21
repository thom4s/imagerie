<?php
$dates = $args['dates'];


if( $dates ) :
    foreach( $dates as $d ) :

        $date = $d['chrono_date'];
        $photo = $d['chrono_photo'];
        $legend = $d['chrono_legend'];
        $title = $d['chrono_title'];
        $descr = $d['chrono_description']; ?>


        <?php echo $date; ?>
        <img src="<?php echo $photo; ?>" alt="">
        <?php echo $legend; ?>
        <?php echo $title; ?>
        <?php echo $descr; ?>

        
    <?php endforeach; ?>
<?php endif; ?>
