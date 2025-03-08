<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="site-header">
        <div class="header-container">
            <!-- Columna 1: Logotipo -->
            <div class="header-column header-logo">
                <?php
                // Mostrar el logotipo personalizado
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    // Mostrar el nombre del sitio si no hay logotipo
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
            </div>

            <!-- Columna 2: Menú de navegación -->
            <div class="header-column header-menu">
                <?php
                // Mostrar el menú de navegación
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1', // Ubicación del menú registrado con register_nav_menu
                        'menu_id' => 'header-menu', // ID del menú (en minúsculas y sin espacios)
                        'container' => false, // No usar un contenedor adicional
                        'menu_class' => 'menu', // Clase CSS para la lista del menú
                    )
                );
                ?>
            </div>

            <!-- Columna 3: Redes sociales -->
            <div class="header-column header-social">
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </div>
        </div>
    </header>