<?php
$projects = $args['projects']; ?>


<section class="pushprojects">
    <div class="containerframe">

        <?php if( $projects ) :
            foreach( $projects as $p ) :
                $id = $p->ID;
                $title = $p->post_title;
                $thumb = get_the_post_thumbnail($id, 'medium');
                $subtitle = get_field('', $id);

            ?>


                <div class="containerproj">
                    <a href="<?php the_permalink($id); ?>">
                        <?php echo $thumb; ?>
                        <h2><?php echo $title; ?></h2>
                        <p class="textsubtitle">Le sous-titre</p>
                        <p>INFORMATIONS COMPLÉMENTAIRES</p>
                    </a>
                </div>
                
                
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>
