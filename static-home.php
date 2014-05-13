<?php
/*
Template Name: Static Home Page
*/
?>

<!DOCTYPE html>

<html>


<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?> | FIRST Robotics Competition Team 2059</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--<![if lt IE 9]>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie8.css" type="text/css" media="screen" />
<![endif]>-->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php wp_head(); ?>
</head>

<body>
<?php get_header(); ?>
<?php include 'slider.php' ?>
<div id="wrapper" style="margin-top:0;">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="entry">
<?php the_content(); ?>
</div>

<?php endwhile; ?>

<div class="navigation">

<?php posts_nav_link(); ?>

</div>

<?php endif; ?>

</div>

<?php get_footer(); ?>
	<script src="<?php bloginfo('template_url'); ?>/slides.min.jquery.js"></script>
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 580,
        navigation: false
      });
    });
  </script>


<?php include("eastereggs.php"); ?>

</body>
</html>