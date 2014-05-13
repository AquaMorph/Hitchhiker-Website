<?php
if ( function_exists('register_sidebar') )
    register_sidebar();



add_filter('get_search_form', 'new_search_button');
function new_search_button($text) {
$text = str_replace('value="Search"', 'value="Search"', $text);
return $text;
}



function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );





add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'match',
		array(
			'labels' => array(
				'name' => __( 'Matches' ),
				'singular_name' => __( 'Match' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'match'),
		'supports' => array('title', 'editor', 'thumbnail')
		)
	);
	register_post_type( 'tutorial',
		array(
			'labels' => array(
				'name' => __( 'Tutorials' ),
				'singular_name' => __( 'Tutorial' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'tutorial'),
		'supports' => array('title', 'editor', 'thumbnail')
		)
	);
	register_post_type( 'archive',
		array(
			'labels' => array(
				'name' => __( 'Archives' ),
				'singular_name' => __( 'Archive' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'archive'),
		'supports' => array('title', 'editor', 'thumbnail')
		)
	);	
	register_post_type( 'press_release',
		array(
			'labels' => array(
				'name' => __( 'Press Releases' ),
				'singular_name' => __( 'Press Release' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'pr'),
		'supports' => array('title', 'editor', 'thumbnail')
		)
	);	
}

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'menu-1' => __( 'Menu 1' ),
)
);

}

function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');



if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
	add_image_size('featured-thumbnail', 300, 225, true);
	add_image_size('post-feature', 660, 371, true);
	add_image_size('sidebar-thumb', 270, 64, true);
	add_image_size('nav', 240, 240, true);

}

wp_oembed_add_provider( $format, $provider, $regex );

add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );

function add_video_wmode_transparent($html, $url, $attr) {

if ( strpos( $html, "<embed src=" ) !== false )
   { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
elseif ( strpos ( $html, 'feature=oembed' ) !== false )
   { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
else
   { return $html; }
}
add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);

function tweakjp_custom_twitter_site( $og_tags ) {
	$og_tags['twitter:site'] = '@team2059';
	return $og_tags;
}
add_filter( 'jetpack_open_graph_tags', 'tweakjp_custom_twitter_site', 11 );





?>