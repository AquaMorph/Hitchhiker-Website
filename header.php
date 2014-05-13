<div class="header">
<div class="logo-animation"><a href="<?php bloginfo('url'); ?>"><div id="logo">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" />
<h6><span>The Hitchhikers</span></h6></div></div>
<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
<div id="search">
<?php get_search_form(); ?>
</div>
</div>
