<!DOCTYPE html>

<html>


<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
    <meta name="viewport" content="width=device-width">

    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<![if lt IE 9]>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie8.css" type="text/css" media="screen" />
<![endif]>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php wp_head(); ?>

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>


<body>
<?php include("eastereggs.php"); ?>
<?php get_header(); ?>

<div id="wrapper">
<div class="entry-list">

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div id="section">
<div class="video-container">
<?php if ( p75HasVideo($post->ID) ) {echo p75GetVideo($post->ID);} else {the_post_thumbnail('post-feature');} ?></div>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>
<?php endwhile; ?>

<div class="navigation"><?php posts_nav_link('&nbsp;','Previous Page','Next Page'); ?></p></div>

<?php endif; ?>
</div>

</div>


<?php get_footer(); ?>


</div>

</body>
</html>