<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martini Seguros</title>

     <!-- Precargar fuentes -->
    <!-- Precargar fuentes -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/FashionFetish-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/NevermindHeadline-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <?php wp_head() ?>
</head>
<body>
    


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php the_post_thumbnail(); ?>
    <?php the_category(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    
</body>
</html>
