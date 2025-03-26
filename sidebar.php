<?php 
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit;

    if ( is_active_sidebar('widget_1')  ) : ?>
            <aside class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'widget_1' ); ?>
    </aside>
    <?php endif; ?>



<?php endif; ?>  add_theme_support( 'custom-logo' );