<?php
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>

    <footer>
        <?php wp_footer(); ?>
        <?php // this functions loads the footer.php file ?>    
    </footer>

    <h1><?php the_title(); ?></h1>


  
  <!-- opening flex-container will go here -->
  
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

  

    </body>
    </html>
    
    <!-- closing flex-container will go here -->

  <?php wp_footer(); ?>
  <?php // this function loads the footer.php file ?>

  <?php // GET DYNAMIC FOOTER CONTENT ?>
        <?php wp_footer(); ?>
    <?php // END GET DYNAMIC FOOTER CONTENT ?>


    
    <nav>
     <?php wp_nav_menu( array( 
         'theme_location' => 'footer-menu', 
         'container_class' => 'footer-nav' 
         ) ); ?>
 </nav>

 <nav>
     <?php wp_nav_menu( array( 
         'theme_location' => 'social-menu', 
         'container_class' => 'footer-social' 
         ) ); ?>
 </nav>


 <p class="copyright">&copy; <?php echo bloginfo('name') ?>, <?php echo date("Y"); ?></p>