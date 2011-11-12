<?php
/*
Plugin Name: JennyClicks Buy Now Buttons
Plugin URI: http://www.jennyclicks.com/plugincreator
Description: Use these awesome buy now buttons in your WP posts and pages by just using a simple short code & increase your sales and conversions like never before. After activating this plugin, just click on JennyClicks Buy Now Buttons tab in the WP admin sidebar. For any help, visit www.jennyclicks.com/support
Version: 1.0
Author: JennyClicks Inc.
Author URI: http://jennyclicks.com
License: GPL2
*/
/*  Copyright 2011  JennyClicks Inc.  (email : support@jennyclicks.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

session_start();

$_SESSION[blogurl] = get_bloginfo ( 'wpurl' );

$_SESSION[processurl1] = $_SESSION[blogurl]."/wp-content/plugins/jennyclicksbuynowbuttons";

global $wpdb;


add_action('admin_menu', 'jennyclicks_top_menu_buynowbuttons');

function jennyclicks_top_menu_buynowbuttons() {
add_menu_page('JennyClicks Buy Now Buttons', 'JennyClicks Buy Now Buttons', 'read', 'jennyclicks_buynowbuttons_slug', 'jennyclicks_buynowbuttons_page');
}

function jennyclicks_buynowbuttons_page() {
?>
<div>
<p align="center"><img src="http://jennyclicks.com/pluginhead.jpg" width="95%"></p>
<h2 align="center">JennyClicks Buy Now Buttons Page</h2>
To create your own Wordpress plugin & expose your website, name & affiliate links to millions of WP users, just 
<a href="http://jennyclicks.com/plugincreator" target="_blank">click here</a> (creating a WP plugin was never this easy). To create more awesome graphics at just click 
of a button (no photoshop knowledge required), just <a href="http://d22335rc-9ts7qfz1w0gyi2pau.hop.clickbank.net" target="_blank">click here</a>.
<br><br><b>To use these buttons</b>, just place the short code in to your posts or pages or sidebar where you would like these buttons to appear. You can link these 
buttons as normal texts.
<br><br>
<img src="<?php echo($_SESSION[processurl1]); ?>/bb1.jpg"><br><strong>Use short code:</strong> [jennyclicksbnb1]
<br><br><br>
<img src="<?php echo($_SESSION[processurl1]); ?>/bb2.jpg"><br><strong>Use short code:</strong> [jennyclicksbnb2]
<br><br><br>
<img src="<?php echo($_SESSION[processurl1]); ?>/bb3.jpg"><br><strong>Use short code:</strong> [jennyclicksbnb3]
<br><br><br>
<img src="<?php echo($_SESSION[processurl1]); ?>/bb4.jpg"><br><strong>Use short code:</strong> [jennyclicksbnb4]
<br><br><br>
<img src="<?php echo($_SESSION[processurl1]); ?>/bb5.jpg"><br><strong>Use short code:</strong> [jennyclicksbnb5]
<br><br><br>
<img src="<?php echo($_SESSION[processurl1]); ?>/bb6.jpg"><br><strong>Use short code:</strong> [jennyclicksbnb6]
<br><br><br>
For any help, visit <a href="http://jennyclicks.com/support" target="_blank">www.jennyclicks.com/support</a><br>
</div>
<?php
}

function jennyclicks_add_button($content) {
$jcaform = '<br><img src="'.$_SESSION[processurl1].'/bb1.jpg" border="0" alt="_JennyClicks Buy Now Buttons WP Plugin"><br>';
$content = str_replace('[jennyclicksbnb1]',$jcaform,$content);
$jcaform = '<br><img src="'.$_SESSION[processurl1].'/bb2.jpg" border="0" alt="_JennyClicks Buy Now Buttons WP Plugin"><br>';
$content = str_replace('[jennyclicksbnb2]',$jcaform,$content);
$jcaform = '<br><img src="'.$_SESSION[processurl1].'/bb3.jpg" border="0" alt="_JennyClicks Buy Now Buttons WP Plugin"><br>';
$content = str_replace('[jennyclicksbnb3]',$jcaform,$content);
$jcaform = '<br><img src="'.$_SESSION[processurl1].'/bb4.jpg" border="0" alt="_JennyClicks Buy Now Buttons WP Plugin"><br>';
$content = str_replace('[jennyclicksbnb4]',$jcaform,$content);
$jcaform = '<br><img src="'.$_SESSION[processurl1].'/bb5.jpg" border="0" alt="_JennyClicks Buy Now Buttons WP Plugin"><br>';
$content = str_replace('[jennyclicksbnb5]',$jcaform,$content);
$jcaform = '<br><img src="'.$_SESSION[processurl1].'/bb6.jpg" border="0" alt="_JennyClicks Buy Now Buttons WP Plugin"><br>';
$content = str_replace('[jennyclicksbnb6]',$jcaform,$content);
return($content);
}

add_filter('the_content', 'jennyclicks_add_button');

?>