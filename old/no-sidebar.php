<?php
/*
Template Name: No Sidebar
*/
?>

<!DOCTYPE html>

<html>

<head profile="http://gmpg.org/xfn/11">

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
    <meta name="viewport" content="width=device-width">

<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon.png" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
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

</head>

<body>




<?php get_header(); ?>


<?php 

if ( p75HasVideo($post->ID) ) {
    echo '<div id="video"><center>';
	echo p75GetVideo($post->ID);
	echo '</center></div>';
}

 ?>

<div id="slides">
<div id="wrapper">



<div id="box" style="width:729px;">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="post">

<h3><?php the_title(); ?></h3>

<div class="entry">



<?php the_content(); ?>

</div>

</div>

<?php endwhile; ?>

<div class="navigation">

<?php posts_nav_link(); ?>

</div>

<?php endif; ?>
</div>




<?php get_footer(); ?>
<?php include("eastereggs.php"); ?>

</div>
</div>

</body>

</html>