=== TwentyTen Gallery Fix ===
Contributors: de-ce
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mail%40deceblog%2enet&lc=RO&item_name=TwentyTen%20gallery%20fix%20%20Wordpress%20plugin&item_number=1&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: galleries, gallery, images, image, photo, media
Requires at least: 3.0
Tested up to: 3.0.4
Stable tag: 1.0

TwentyTen theme will break galleries with more then 3 columns (also 2 columns galleries look strange). This is a little fix.

== Description ==

TwentyTen theme will break galleries with more then 3 columns (also 2 columns galleries look strange). This is a little fix.

TwentyTen, the default WordPress theme, removes the default dynamic styles from WordPress galleries, and adds some static CSS, so galleries with anything but 3 columns look broken. **It’s not a WordPress bug**, it is TwentyTen specific.

What is the problem? TwentyTen theme’s CSS sets all the gallery items width to 33%, so any gallery with more then 3 columns looks broken (the items are thrown on the next row), as the the total width of the gallery excedes the post width (4 x 33% = 132%).

This plugin adds some custom classes to galleries (eg. 4 columns: .width-25), and some CSS that fixes the width problem.

**No configuration needed. Just upload, and install. The galleries will look as they should.**

<a href="http://www.decetutorial.net/2011/01/twentyten-gallery-fix.html">Plugin's page</a>

== Installation ==

Upload TwentyTen Gallery Fix plugin to your blog. Activate it. Done!

== Screenshots ==

1. A gallery with 8 items, and 4 columns (150px thumbnails) – twentyTen default
2. A gallery with 8 items, and 4 columns (150px thumbnails) – twentyTen fixed
3. A gallery with 8 items, and 5 columns (100px thumbnails) – twentyTen default
4. A gallery with 8 items, and 5 columns (100px thumbnails) – twentyTen fixed

== Changelog ==

* Version 1.0
	* Initial version