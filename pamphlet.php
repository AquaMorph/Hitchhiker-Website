<?php
/*
Template Name: Pamphlet
*/
?>

<!DOCTYPE html>

<html>

<head profile="http://gmpg.org/xfn/11">

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon.png" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<script type="text/javascript">

      function activateTab(pageId) {
          var tabCtrl = document.getElementById('tabCtrl');
          var pageToActivate = document.getElementById(pageId);
          for (var i = 0; i < tabCtrl.childNodes.length; i++) {
              var node = tabCtrl.childNodes[i];
              if (node.nodeType == 1) { /* Element */
                  node.style.display = (node == pageToActivate) ? 'block' : 'none';
              }
          }
      }

    </script>

<style media="screen" type="text/css">
body {
	font-family: Helventica, sans-serif;
	background-color:#fff;
	}

.container {
	background:none;
	position:relative;
	margin-left: auto;
    margin-right: auto;
	width: 1024px;
	max-width: 90%;
}

p {
	color:#558ed5;
	max-width:280px;
		padding-left:20px;
	}

h1 {
	color:#fff;
	background-color:#558ed5;
	margin:auto;
	width:285px;
	padding:5px 10px 5px 25px;
	-webkit-margin-after: 0px;
	border-top-left-radius: 25px;
	border-bottom-left-radius: 25px;
	border-top-right-radius: 25px;
	border-bottom-right-radius: 25px;
	}	
	
img {    max-width:100% !important;
    height:auto;
    display:block;
	    left: 20px;

}



/* CARD */

.card {
	max-width:300px;
	height:400px;
	float:left;
	position:relative;
	padding: 0 30px 20px 10px;
	}

/* VIDEO */


.embed-container {
    position: relative;
    padding-bottom: 56.25%; /* 16/9 ratio */
    padding-top: 5px; /* IE6 workaround*/
    height: 0;
    overflow: hidden;
}

.embed-container iframe,
.embed-container object,
.embed-container embed {
    position: absolute;
    top: 0;
    left: 20px;
	max-width: 280px;
	max-height: 158px;
    width: 100%;
    height: 100%;
}



</style>

<?php wp_head(); ?>

  </head>
<body>


<div class="container">


        <?php the_content(); ?>
</div>
</body>

</html>