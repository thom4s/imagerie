<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php

    // Check value exists.
    if( have_rows('modules') ):

        // Loop through rows.
        while ( have_rows('modules') ) : the_row();

            if( get_row_layout() == 'module_hero' ):

                get_template_part('Components/module', 'hero', array(
                    'title' =>  get_sub_field('module_title'),
                    'consigne' => get_sub_field('consigne_scroll'),
                    'image' => get_sub_field('module_background')
                )); 


            elseif( get_row_layout() == 'module_citation' ): 

                get_template_part('Components/module', 'citation', array(
                    'content' =>  get_sub_field('module_content'),
                    'image' => get_sub_field('module_background'),
                    'auteur' => get_sub_field('module_auteur')
                )); 
                          

            elseif( get_row_layout() == 'module_chrono' ): 

                get_template_part( 'Components/module', 'dates', array(
                    'dates' => get_sub_field('dates')
                ) ); 
    

            elseif( get_row_layout() == 'module_presentation' ): 
                
                get_template_part('Components/module', 'presentation', array(
                    'text' =>  get_sub_field('introduction_text'),
                    'photo' =>  get_sub_field('introduction_photo'),
                    'legende' =>  get_sub_field('legende_photo'),
                )); 


            elseif( get_row_layout() == 'module_push' ): 
                get_template_part('Components/module', 'push', array(
                    'projects' =>  get_sub_field('push_project')
                )); 

            endif;

        // End loop.
        endwhile;

    endif;
    ?>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>