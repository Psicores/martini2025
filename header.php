<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <?php
    // Mostrar el logotipo personalizado
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        // Mostrar el nombre del sitio si no hay logotipo
        echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
    }
    ?>

    <?php
    // Mostrar el menú de navegación
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1', // Ubicación del menú registrado con register_nav_menu
            'menu_id'        => 'header-menu', // ID del menú (en minúsculas y sin espacios)
            'container'      => 'nav', // Contenedor del menú (puede ser 'nav', 'div', etc.)
            'container_class' => 'main-navigation', // Clase CSS para el contenedor
            'menu_class'     => 'menu', // Clase CSS para la lista del menú
        )
    );
    ?>
</header>