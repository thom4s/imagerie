<?php
$dates = $args['dates'];


if( $dates ) :

    foreach( $dates as $key => $d ) :

        $photo = $d['chrono_photo'];
        $legend = $d['chrono_legend'];
        $title = $d['chrono_title'];
        $descr = $d['chrono_description']; ?>


        <section id="<?php echo $key; ?>" class="module_chronologie <?php echo $key > 0 ? 'hidden' : ''; ?>">

            <div class="chrono_img">
                <img class="" src="<?php echo $photo; ?>">
                <p><?php echo $legend; ?></p>
            </div>


            <div class="chrono_content">

                <div class="chrono_timeline">
                    <?php foreach( $dates as $key => $e ) : $date = $e['chrono_date']; ?>
                        <p class="textdate <?php echo $key == 0 ? 'active' : ''; ?>" data-id="<?php echo $key; ?>">
                            <?php echo $date; ?>
                        </p>
                        <?php if ($key < count($dates) - 1) : ?><hr width="1px" size="75px" /><?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="chrono_text">
                    <div class= "steptitle"><?php echo $title; ?></div>
                    <div class= "step-content">
                        <?php echo $descr; ?>
                    </div>
                </div>
            </div>


        </section>
        
    <?php endforeach; ?>



<?php endif; ?>
