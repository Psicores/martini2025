<?php get_header(); ?>
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
        <?php the_content(); ?>
        <?php the_post_thumbnail(); ?>
        <?php the_category(); ?>

    <?php endwhile; else: ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<? get_footer(); ?>