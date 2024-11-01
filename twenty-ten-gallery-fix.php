<?php
/*
Plugin Name: TwentyTen Gallery Fix
Plugin URI:  http://www.decetutorial.net/2011/01/twentyten-gallery-fix.html
Description: TwentyTen theme will break galleries with more then 3 columns (also 2 columns galleries look strange). This is a little fix.
Author:      Dan-Lucian Stefancu
Author URI:  http://deceblog.net
Version:     1.0
*/

add_filter( 'gallery_style', 'dece_twentyten_gallery_fix', 8); // priority 8 so other filters can be apllied after this and before twentyten's
add_action( 'wp_head', 'dece_add_twentyten_gallery_fix_css', 20); // priority 20 = runs later then other wp_head actions - default: 10

function dece_twentyten_gallery_fix( $css ) {
/*
default gallery style
---------------------

<style type='text/css'>
			#{$selector} {
				margin: auto;
			}
			#{$selector} .gallery-item {
				float: {$float};
				margin-top: 10px;
				text-align: center;
				width: {$itemwidth}%;			}
			#{$selector} img {
				border: 2px solid #cfcfcf;
			}
			#{$selector} .gallery-caption {
				margin-left: 0;
			}
		</style>
		<!-- see gallery_shortcode() in wp-includes/media.php -->
		<div id='$selector' class='gallery galleryid-{$id}'>

---------------------
TwentyTen theme removes the styles, so we will add some dynamic classes to the gallery .width-{$itemwidth}

*/
	$css = substr($css, 0, -2); // removes '> so we can add a custom class
	preg_match('/width: (.*)%;/', $css, $matches);
	$css .= " width-" . $matches[1] . "'>";
	return $css;
}

function dece_add_twentyten_gallery_fix_css() {
?>
	
<!--	TwentyTen Gallery Fix CSS -->
	<style type="text/css">
	/* 
	clm		width
	---		-----
	 2		 50%
	 3		 33%
	 4		 25%
	 5		 20%
	 6		 16%
	 7		 14%
	 8		 12%
	 9		 11%
	*/
	
	#content .width-50 .gallery-item { width: 50%; }
	#content .width-33 .gallery-item { width: 33%; }
	#content .width-25 .gallery-item { width: 25%; }
	#content .width-20 .gallery-item { width: 20%; }
	#content .width-16 .gallery-item { width: 16%; }
	#content .width-14 .gallery-item { width: 14%; }
	#content .width-12 .gallery-item { width: 12%; }
	#content .width-11 .gallery-item { width: 11%; }
	</style>
<?php
}