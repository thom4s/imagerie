<?php 
    /* template Name: Tuiles Promotion 2025 */
get_header();


$args = array(
'post_type' => 'tuile',
);
$the_query = new WP_Query( $args );

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="the_content">
            <div class="the_content_inner">
                <h1><?php the_title(); ?></h1>
                <div class="wysiwyg">
                    <?php the_content(); ?>
                </div>



                <?php if ( $the_query->have_posts() ) : ?>
                    <section>
                        <h2>Les tuiles</h2>
                        
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="tuile_item">
                                <?php the_post_thumbnail(); ?>
                                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; ?>

                    </section>
                <?php endif; wp_reset_postdata(); ?>

                

            </div>
        </section>



<?php endwhile;
endif; ?>
<?php get_footer(); ?>