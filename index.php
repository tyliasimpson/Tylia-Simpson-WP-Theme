<?php
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>


    <?php wp_head(); ?>
    <?php // this function loads the header.php file ?>





    <h1><?php the_title(); ?></h1>
    
<div class="flex-container">

  <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'tylia-simpson' );
      endif;
      ?>
  </main>

  <?php get_sidebar(); ?>
  
  </div>

  <?php wp_footer(); ?>
  <?php // this function loads the footer.php file ?>