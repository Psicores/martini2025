<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martini Seguros</title>
    <?php wp_head() ?>
</head>
<body>
<?php wp_body_open() ?>

<?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-1', // Ubicación del menú registrado con register_nav_menu
        'menu_id' => 'Header-Menu',
    )
);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
    <?php the_content(); ?>
    <?php the_post_thumbnail(); ?>
    <?php the_category(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    
</body>
</html>
