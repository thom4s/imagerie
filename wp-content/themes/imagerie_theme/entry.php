<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php if (is_singular()) {
            echo '<h1 class="entry-title" itemprop="headline">';
        } else {
            echo '<h2 class="entry-title">';
        } ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
        <?php if (is_singular()) {
            echo '</h1>';
        } else {
            echo '</h2>';
        } ?>

    </header>

    <div class="entry-content" itemprop="mainEntityOfPage">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_post_thumbnail_url('full'); ?>" title="<?php $attachment_id = get_post_thumbnail_id($post->ID);
                                                                        the_title_attribute(array('post' => get_post($attachment_id))); ?>"><?php the_post_thumbnail('full', array('itemprop' => 'image')); ?></a>
        <?php endif; ?>
        <meta itemprop="description" content="<?php echo esc_html(wp_strip_all_tags(get_the_excerpt(), true)); ?>">
        <?php the_content(); ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    </div>

</article>