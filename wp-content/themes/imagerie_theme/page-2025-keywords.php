<?php 
    /* template Name: Mots clés Promotion 2025 */
get_header('2025'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <section class="the_content">
            <div class="the_content_inner">
                <h1><?php the_title(); ?></h1>
                <div class="wysiwyg">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

    <?php if( have_rows('mots') ):

        // Loop through rows.
        while ( have_rows('mots') ) : the_row();

            the_sub_field('mot');

            // Loop over sub repeater rows.
            if( have_rows('definition_mot') ):
                while( have_rows('definition_mot') ) : the_row();

                    $forme = get_sub_field('forme');
                    $question = get_sub_field('questions');
                    $reponse = get_sub_field('reponses'); ?>
                    
                    <img src="<?php echo $forme['url']; ?>">
                    <?php echo $question; ?>
                    <?php echo $reponse; ?>

                <?php endwhile;
            endif;
            

        // End loop.
        endwhile;

    endif;
    ?>



<?php endwhile;
endif; ?>
<?php get_footer(); ?>