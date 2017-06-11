<?php
/*
Plugin Name: WP Mail delay
Version: 0.1
Plugin URI: http://www.tekenbeetziekten.nl/
Description: Reconfigures the wp_mail() function to delay sending of e-mail to max. 14 per second to comply with Amazon SES.
Author: Robert
Author URI: http://www.tekenbeetziekten.nl
*/

/**
 * @author Robert
 * @copyright Robert, 2017-06, All Rights Reserved
 * This code is released under the GPL licence version 3 or later, available here
 * http://www.gnu.org/licenses/gpl.txt
 */
if (!function_exists('my_wp_mail_delay_filter')) :
add_filter( 'wp_mail', 'my_wp_mail_delay_filter' );
function my_wp_mail_delay_filter( $args ) {
	usleep(71428);
	$new_wp_mail = array(
		'to'          => $args['to'],
		'subject'     => $args['subject'],
		'message'     => $args['message'],
		'headers'     => $args['headers'],
		'attachments' => $args['attachments']
	);
	
	return $new_wp_mail;
}
endif;


