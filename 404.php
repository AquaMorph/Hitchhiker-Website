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


<?php wp_head(); ?>

</head>

<body>




<?php get_header(); ?>


<div id="wrapper">



<div id="box">
<div class="post">
<div class="entry">
<div class="featuredimg">
<p>Uh oh! You've landed in a dreaded land.</p>
<img src="http://thehitchhikers.org/wp-content/themes/The-Hitchhikers/images/404.png" alt="404" width="600px" style="padding:0 20px 0 20px;"/>

</div>
<p>Okay. Don't panic. We can fix this. Have you tried using the search field in the sidebar? Maybe this page got moved. If you still have any issues, feel free to <a href="/contact-us">contact us</a> and we will try to fix the issue as soon as possible. </p>
</div>
</div>

<div class="navigation">

<?php posts_nav_link(); ?>

</div>

</div>


<div class="sidebar" style="top:18px">
<?php get_sidebar(); ?>
</div>



<?php get_footer(); ?>
<?php include("eastereggs.php"); ?>

</div>


</body>

</html>