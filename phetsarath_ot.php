<?php
/*
  Plugin Name: Phetsarath OT
  Plugin URI: http://frankkung.com
  Description: Turn your Lao font to Phetsarath OT only install and Active :D.
  Version: 1.0 (Beta)
  Author: Sengxay XAYACHACK
  Author URI: http://frankkung.com
  License: GPL
*/

/* copyright 2016 Sengxay XAYACHACK
Email : root@frankkung.com
Website : http://frankkung.com
Facebook : www.facebook.com/frank.xayachack
 */

 // Action
add_action('wp_enqueue_scripts','phetsarath');
add_action('admin_enqueue_scripts','phetsarath');

// call style
function phetsarath() {
	$locate = plugins_url('fonts/style.css',__FILE__);
	wp_register_style( 'phetsarath_ot',$locate);
	wp_enqueue_style('phetsarath_ot');
	
}


?>