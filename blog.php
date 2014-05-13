<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<?php add_action('wp_head', 'your_function'); ?>
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





<div id="slides">
<div id="wrapper">


<div id="box">


<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<table class="nospace" border="0" cellspacing="0" cellpadding="0">



<tr>
	<td colspan="2" style="width:660px;max-width:100%;">
	<div class="hometitle">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	</td>
</tr>

<tr>
	<td width="50%" height="180px">
	<div class="featuredimg">
	<a href="<?php the_permalink(); ?>"><?php {the_post_thumbnail('thumbnail', array('class' => 'alignleft'));} ?></a>
	</div>  
	</td>
	
    <td  width="340px">
	<div class="featuredcont">
	<?php the_excerpt(); ?>
	</div>
	</td>
	</div>
</tr>

</table>

<?php endwhile; ?>

<div class="navigation"><?php posts_nav_link('&nbsp;','Previous Page','Next Page'); ?></p></div>

<?php endif; ?>

</div>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
<?php include("eastereggs.php"); ?>

</div>
</div>
</body>
</html>