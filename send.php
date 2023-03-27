<?php
// Load WordPress
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );


add_filter( 'wp_mail_content_type', 'get_content_type' );



function get_content_type() {
	
	return 'text/html';
}

function send_mail(){

	global $wpdb;
	$data = get_admin_mail();
	$email = $data['admin_mail_address'] ?? '';
	wp_mail(
		$email,
		'New order',
		'Go to the <a href="https://meetinghousemovers.directline.company/wp-admin/admin.php?page=quiz-main">admin panel</a> to see the new order',
		array(
			'From: Estimates <noreply@directline.company>'
		),
		$attachment
	);
}

send_mail();
