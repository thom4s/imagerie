<?php 
    get_header(); 
    wp_enqueue_style('project-style'); 

    if (have_posts()) : while (have_posts()) : the_post(); ?>


    <section class= "modale" style="background-image: url('<?php the_field('introduction_cover_2'); ?>')"> 
        <a href="/" class="button btn-black containerback">← &nbsp; Retour à l'accueil</a>

        <div class="overlay">
            <div class="container">
                <h1 class= "title2"><?php the_title(); ?></h1>
                
                <div class="textsubtitle2">
                    <?php the_content();  ?>
                </div>

                <div class="containerbutton">
                    <a id="show_swiper" href="<?php the_field('introduction_btn_link'); ?>" target="<?php echo get_field('introduction_btn_link') !== "#" ? '_blank' : ''; ?>" class="button nextbutton">
                        <?php get_template_part('Svgs/moucharabieh'); ?>
                        <span>COMMENCER</span>
                    </a>
                </div>
            </div>
        </div>
    </section>  
    

    <?php get_template_part('Projects/project', get_field('promotion') ); ?>


<?php endwhile; endif; ?>

<?php get_footer('clean'); ?>