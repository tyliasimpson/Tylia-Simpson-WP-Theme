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




        /*  ADD THE MENUS */

     function add_my_menus() {
        register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'social-menu' => __( 'Social Menu' ),
        )
        );
    }
    add_action( 'init', 'add_my_menus' );



    // ADD ADDITIONAL CUSTOM FEATURES TO THE SITE THEME
    // https://developer.wordpress.org/reference%2Ffunctions%2Fadd_theme_support%2F/

    function tyliasimpson_theme_init(){

        add_theme_support('post-thumbnails');
        // Enable featured images and post thumbnails

         add_theme_support( 'automatic-feed-links' );
        
        add_theme_support('title-tag');
        // Adds a custom <title> tag in the <head>
        
        add_theme_support('html5',
        array(
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption', 
            'figure', 
            'figcaption', 
            'nav', 
            'section')
        // Forces WP to use semantic HTML 5 tags such as <figure> and <figcaption>
        );
        }
        

        
        // ADDS THESE FEATURES TO WP
        add_action('after_setup_theme', 'tyliasimpson_theme_init');

            // ADDING WIDGET SUPPORT

    function tyliasimpson_widgets_init() {

        register_sidebar( array(
            'name'          => 'Widget sidebar',
            'id'            => 'widget_1',
            'before_widget' => '<section>',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

    }
    add_action( 'widgets_init', 'tyliasimpson_widgets_init' );