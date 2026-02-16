<?php 
    /* template Name: Accueil Promotion 2025 */
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <div class="wysiwyg">
                    <?php the_content(); ?>
                </div>

<?php the_field('premier_champ'); ?>

    <?php if( have_rows('modules') ):

        // Loop through rows.
        while ( have_rows('modules') ) : the_row();

            if( get_row_layout() == 'cover' ):

                get_template_part('Components/module', 'hero', array(
                    'image' =>  get_sub_field('background_IMA'),
                    'title' => get_sub_field('cover_title'),
                )); 

            elseif( get_row_layout() == 'module1' ):

                get_template_part('Components/module', 'hero', array(
                    'title' =>  get_sub_field('module1_title'),
                    'content' => get_sub_field('module1_content'),
                    'image' => get_sub_field('module1_img'),
                    'bg_color' => get_sub_field('module1_bg'),
                    'inversed' => get_sub_field('module1_inversed'),
                    'btn_label' => get_sub_field('module1_btn_label'),
                    'btn_url' => get_sub_field('module1_btn_url'),
                )); 


            endif;

        // End loop.
        endwhile;

    endif;
    ?>



<?php endwhile;
endif; ?>
<?php get_footer(); ?>