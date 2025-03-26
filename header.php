<?php
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>

    <!DOCTYPE html <?php language_attributes(); ?> >
    <html>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php // the viewport metatag is what makes a design responsive ?>
        

        <?php // GET DYNAMIC HEADER CONTENT ?>
            <?php wp_head(); ?>
        <?php // END GET DYNAMIC HEADER CONTENT ?>

       <!--  <title></title> the functions.php  creates a title-->
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        
        <?php 
        // Enables Wordpress custom logo
        // See: https://developer.wordpress.org/reference%2Ffunctions%2Fadd_theme_support%2F/#custom-logo
        
            if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            }
        ?>

        <nav>
            <?php
            wp_nav_menu(array(
                'menu_class'	  	=> 'primary-menu',
                'theme_location' 	=> 'header-menu',
                'menu_id'	    	=> 'menu',
                'container'         => 'div',
            ));
        ?>

            <?php get_search_form(); ?>
        </nav>

        <div class="branding">
            <a href="<?php echo esc_url(home_url()); ?>">
             <?php bloginfo('name'); ?>
            </a>
         </div>
    
        <div class="description">
            <?php bloginfo('description'); ?>
            <?php // This is the WP site tagline, not the meta description tag ?>
        </div>

    </header>