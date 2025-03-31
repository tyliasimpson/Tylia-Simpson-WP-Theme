<?php 
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit;

    if ( is_active_sidebar('widget_1')  ) : ?>
            <aside class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'widget_1' ); ?>
    </aside>
    <?php endif; ?>

    add_theme_support( 'custom-logo' );

<?php endif; ?>  





<?php  // START STEP 2.4
    // Add this to all your php files for added security
    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>
    
    <!-- START STEP 2.4 ADD HEADER.PHP CODE -->
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php // the viewport metatag is what makes a design responsive ?>
        
        <title></title>
    </head>

    <body>

    <header>
        <nav>
        </nav>
    </header>
    <!-- END STEP 2.4 ADD HEADER.PHP CODE -->
    <?php  // END OF STEP 2.4 ?>




    <?php 
    // START STEP 2.5 BUILD FOOTER
    // Add this to all your php files for added security

        if (!defined('ABSPATH'))
          exit; 
             // Exit if accessed directly. 
             // Ex: Not being called up directly by index.php or some other theme PHP file
         ?>

      <footer>
    
      </footer>


    </body>
    </html><?php // END STEP 2.5 BUILD FOOTER ?>





    <?php
 // Add this to all your php files for added security

 if (!defined('ABSPATH'))
     exit; 
     // Exit if accessed directly. 
     // Ex: Not being called up directly by index.php or some other theme PHP file
 
 // FOR COLLEGE NETWORK SECURITY
 // FORCE AUTO-UPDATE EVERYTHING (WP CORE, PLUGINS AND THEMES)
 add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // ENABLE MINOR UPDATES
 add_filter( 'allow_major_auto_core_updates', '__return_true' );         // ENABLE MAJOR UPDATES
 add_filter( 'auto_update_plugin', '__return_true' );                    // UPDATE PLUGINS
 add_filter( 'auto_update_theme', '__return_true' );                     // UPDATE THEMES 

 /*
 * Proper way to enqueue scripts and styles.
 */
 function tyliasimpson_theme_scripts() {
     wp_enqueue_style( 'tyliasimpson', get_stylesheet_uri() );
 }
 add_action( 'wp_enqueue_scripts', 'tyliasimpson_theme_scripts' );

 // END STEP 2.9