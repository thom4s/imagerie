<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php

    // Check value exists.
    if( have_rows('modules') ):

        // Loop through rows.
        while ( have_rows('modules') ) : the_row();

            // Case: Paragraph layout.
            if( get_row_layout() == 'module_hero' ):
                the_sub_field('module_title');
                the_sub_field('consigne_scroll'); ?>
                
                <img src="<?php the_sub_field('module_background'); ?>" >

            <?php // Case: Download layout.
            elseif( get_row_layout() == 'module_citation' ): 
                the_sub_field('module_content'); ?>

                <img src="<?php the_sub_field('module_background'); ?>" >

            <?php endif;

        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
    ?>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>