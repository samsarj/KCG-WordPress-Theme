<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar <?php echo is_front_page() ? 'navbar-transparent' : 'navbar-solid'; ?>">
        
            <div class="nav-menu-container nav-menu-left-container">
            <div class="mobile-menu-toggle" id="mobile-menu-toggle">
                <span class="toggle-icon">☰</span>
            </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'left-menu',
                        'container' => false,
                        'menu_class' => 'nav-menu nav-menu-left',
                    )
                );
                ?>
            </div>
            <div class="navbar-logo">
                <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                    <div class="logo" id="logo"></div>
                </a>
            </div>
            <div class="nav-menu-container nav-menu-right-container">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'right-menu',
                        'container' => false,
                        'menu_class' => 'nav-menu nav-menu-right',
                    )
                );
                ?>
            </div>
        </nav>
        <div class="mobile-menu" id="mobile-menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'left-menu',
                    'container' => false,
                    'menu_class' => 'mobile-nav-menu',
                )
            );
            wp_nav_menu(
                array(
                    'theme_location' => 'right-menu',
                    'container' => false,
                    'menu_class' => 'mobile-nav-menu',
                )
            );
            ?>
        </div>
    </header>
    <?php wp_body_open(); ?>
</body>
</html>
