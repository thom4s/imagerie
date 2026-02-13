<?php 
    /* template Name: Accueil Promotion 2025 */
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <div class="wysiwyg">
                    <?php the_content(); ?>
                </div>



    <?php if( have_rows('modules') ):

        // Loop through rows.
        while ( have_rows('modules') ) : the_row();

            if( get_row_layout() == 'module_hero' ):

                get_template_part('Components/module', 'hero', array(
                    'title' =>  get_sub_field('module_title'),
                    'consigne' => get_sub_field('consigne_scroll'),
                    'image' => get_sub_field('module_background')
                )); 


            endif;

        // End loop.
        endwhile;

    endif;
    ?>



<?php endwhile;
endif; ?>
<?php get_footer(); ?>