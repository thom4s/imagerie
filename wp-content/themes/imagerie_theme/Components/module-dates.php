<?php
$dates = $args['dates'];


if( $dates ) :

    foreach( $dates as $key => $d ) :

        $photo = $d['chrono_photo'];
        $legend = $d['chrono_legend'];
        $title = $d['chrono_title'];
        $descr = $d['chrono_description']; ?>


    <section id="<?php echo $key; ?>" class="module2 <?php echo $key > 0 ? 'hidden' : ''; ?>">

        <img class="imgchrono1" src="<?php echo $photo; ?>">
        <?php echo $legend; ?>

        <div class="timeline">
            <?php foreach( $dates as $key => $e ) : $date = $e['chrono_date']; ?>
                <p class="textdate" data-id="<?php echo $key; ?>"><?php echo $date; ?></p>
                <hr width="1px" size="75px" />
            <?php endforeach; ?>
        </div>

        <div class ="containerstep">
            <div class= "steptitle"><?php echo $title; ?></div>
            <div class= "step-content">
                <?php echo $descr; ?>
            </div>
        </div>

    </section>
        
    <?php endforeach; ?>



<?php endif; ?>
