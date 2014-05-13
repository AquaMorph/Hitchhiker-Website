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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slides.min.jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.scrolling-parallax"></script>
	<script>
	$(function(){
	$.scrollingParallax('images/background.png');{ 
    bgWidth : '200%', 
    enableHorizontal : true 
	});
});
</script>
<script>
	
	
	
	
		$(function(){

			$('#slides').slides({
				preload: false,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>

</head>

<body>
<?php include("eastereggs.php"); ?>
<?php get_header(); ?>
<?php include 'slider.php' ?>


<div id="wrapper">
<div id="box" style="padding:0 0 0 0;">


<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<table class="nospace" border="0" cellspacing="0" cellpadding="0">



<tr>
	<td colspan="2" width="100%">
	<div class="hometitle">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	</td>
</tr>

<tr>
	<td width="320px" height="180px">
	<div class="featuredimg">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?></a>
	</div>  
	</td>
	
    <td  width="340px">
	<div class="featuredcont">
	<div class="entry">
	<?php the_excerpt(); ?>
	</div>
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


</div>
</div>

</body>
</html>