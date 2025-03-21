<?php
$dates = $args['dates'];


if( $dates ) :
    foreach( $dates as $d ) :

        $date = $d['chrono_date'];
        $photo = $d['chrono_photo'];
        $legend = $d['chrono_legend'];
        $title = $d['chrono_title'];
        $descr = $d['chrono_description']; ?>


    <section class="module2">

        <img class="imgchrono1" src="<?php echo $photo; ?>">
        <?php echo $legend; ?>

        <div class="timeline">
            <p class="textdate"><?php echo $date; ?></p>
            <hr width="1px" size="75px" />
            <p class="textdate">1987</p>
            <hr width="1px" size="75px" />
            <p class="textdate">2012</p>
            <hr width="1px" size="75px" />
            <p class="textdate">2018</p>
            <hr width="1px" size="75px" />
            <p class= "textdate">2027</p>
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
