<?php
/*
Plugin Name: Sessionable
Description: Basic PHP Sessions
Author: Tom J Nowell, Code For The People
Version: 1.0
Author URI: http://codeforthepeople.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


add_action( 'init', 'sessionable_start', 1 );
add_action( 'wp_logout', 'session_destroy' );
add_action( 'wp_login', 'session_destroy' );

function sessionable_start() {
	if ( ! session_id() ) {
		session_start();
	}
}
