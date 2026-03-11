<?php 
    /* template Name: Mots clés Promotion 2025 */
    get_header('2025'); 
    wp_enqueue_style('nuage-style');
    wp_enqueue_script('nuage-script');

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="">
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
                <div class="wysiwyg">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>


    <div class="wrapper">
        <?php if( have_rows('mots') ): while ( have_rows('mots') ) : the_row(); ?>
            
                <div class="keyword_item">
                    <h2 class="keyword_trigger"><?php the_sub_field('mot'); ?></h2>

                    <?php if( have_rows('definition_mot') ): ?>
                        <div class="keyword_popin hidden columns --free">

                            <?php while( have_rows('definition_mot') ) : the_row();

                                $forme = get_sub_field('forme');
                                $question = get_sub_field('questions');
                                $reponse = get_sub_field('reponses'); ?>
                                    <div class="">
                                        <img src="<?php echo $forme['url']; ?>">
                                        <h3><?php echo $question; ?></h3>
                                        <?php echo $reponse; ?>
                                    </div>
                            <?php endwhile; ?>
                        </div>

                    <?php endif; ?>
                </div>

        <?php endwhile; endif; ?>
    </div>


<?php endwhile;
endif; ?>
<?php get_footer('2025'); ?>