<div class="footer">
<a href="http://youtube.com/team2059" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/youtube.png" /></a>
<a href="http://twitter.com/team2059" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/twitter.png" /></a>
<a href="http://facebook.com/team2059" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/facebook.png" /></a>
<a href="http://team2059.tumblr.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/tumblr.png" /></a>
<a href="https://plus.google.com/b/109100235863716520709/109100235863716520709" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/google_plus.png" /></a>
<a href="http://instagram.com/team2059" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/instagram.png" /></a>
</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script>
$(function(){$("#wrapper").fadeIn(500);});

$(document).ready(function(){
    $('.header').data('size','big');
});

$(window).scroll(function(){
    var $nav = $('.header');
	var $scroll = $(this).scrollTop();
    if ($scroll > 76) {
        if ($nav.data('size') == 'big') {
            $nav.data('size','small').stop().animate({margin: "-120px 0px 0px 0px"}, "fast");
        }
    } else {
        if ($nav.data('size') == 'small') {
            $nav.data('size','big').stop().animate({margin: "0px 0px 0px 0px"}, "fast");
        }  
    }
});

$(function() {
	var isOpen = false;
      $("#s-button").click( function()
           {	if(isOpen == false){
             $('#search').animate({margin: "-50px auto 0 auto"}, "fast");
             $('#s-button').animate({margin: "7px auto 0 auto"}, "fast");
             $('#search input[type="submit"]').animate({margin: "7px auto 0 auto"}, "fast");
		isOpen = true;
		}
		else {
             $('#search').animate({margin: "-250px auto 0 auto"}, "fast");
             $('#s-button').animate({margin: "207px auto 0 auto"}, "fast");
             $('#search input[type="submit"]').animate({margin: "207px auto 0 auto"}, "fast");
		isOpen = false;
			}
           }
      );
});

function buttonUp(){
 var inputVal = $('.search-field').val();
 inputVal = $.trim(inputVal).length;
 if( inputVal !== 0){
  $('#s-button').css('display','none');
 } else {
  $('#s-button').val('');
  $('#s-button').css('display','block');
 }
}
</script>