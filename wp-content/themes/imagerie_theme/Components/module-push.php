<?php
$projects = $args['projects']; ?>


<section class="pushprojects">
    <div class="containerframe">

        <?php if( $projects ) :
            foreach( $projects as $p ) :
                $id = $p->ID;
                $title = $p->post_title;
                $thumb = get_the_post_thumbnail($id, 'large');
                $subtitle = get_field('introduction_title_1', $id);

            ?>


                <div class="containerproj">
                    <a class="projet_link" href="<?php the_permalink($id); ?>">
                        <?php echo $thumb; ?>

                        <div class="projet_text">
                            <h2><?php echo $title; ?></h2>
                            <p class="textsubtitle"><?php echo $subtitle; ?></p>
                        </div>

                    </a>
                </div>
                
                
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>
