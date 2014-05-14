<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title('|', true); ?></title>
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
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    <div id="wrapper">
        <div class="video-container"><?php if ( p75HasVideo($post->ID) ) {echo p75GetVideo($post->ID);} else {the_post_thumbnail('post-feature');} ?></div>
        <h1><?php echo get_the_title(); ?></h1>
        <div class="entry"><?php the_content(); ?></div>
        <?php endwhile; ?>
        <div class="navigation"><?php posts_nav_link(); ?></div>
        <?php endif; ?>
        </div>
        <?php get_footer(); ?>
        <script>
        $.fn.slideFadeToggle  = function(speed, easing, callback) {
            return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
        };
        </script>
        <script>
        $(document).ready(function() {
            $("#tabs").tabs({ hide: { effect: "slideUp", duration: 250 }}, { show: { effect: "slideFadeToggle", duration: 250 } });
        });
        </script>
        <script type="text/javascript">
        $(function(){
            //  When user clicks on tab, this code will be executed
            $("#tabs li").click(function() {
                //  First remove class "active" from currently active tab
                $("#tabs li").removeClass('active');
                //  Now add class "active" to the selected/clicked tab
                $(this).addClass("active");
            });
        });
        </script>
    </div>
</body>
</html>