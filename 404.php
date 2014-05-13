<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen" />
	<!--<![if lt IE 9]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie8.css" type="text/css" media="screen" />
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
    <div id="wrapper">
    <div class="post">
    <div class="entry">
    <div class="featuredimg">
    <p>Uh oh! You've landed in a dreaded land.</p>
    <img src="<?php bloginfo('template_url'); ?>/images/404.png" alt="404" width="600px" style="padding:0 20px 0 20px;"/>
    </div>
    <p>Okay. Don't panic. We can fix this. Have you tried using the search field in the sidebar? Maybe this page got moved. If you still have any issues, feel free to <a href="/contact-us">contact us</a> and we will try to fix the issue as soon as possible. </p>
    </div>
    </div>
    <div class="navigation"><?php posts_nav_link(); ?></div>
    </div>
    <?php get_footer(); ?>
</body>
</html>