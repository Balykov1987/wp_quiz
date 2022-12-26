<?php
// Load WordPress
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

//$upload_dir = wp_upload_dir('/wp-content/themes/shifters-pro/quiz/admin');
 


add_filter( 'wp_mail_content_type', 'get_content_type' );



function get_content_type() {
	
	return 'text/html';
}

function send_mail(){

	global $wpdb;
	$data = get_admin_mail();
	$email_admin = $data['admin_mail_address'] ?? '';
	$id_user = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_mail = $_POST['user_mail'];
    $user_phone = $_POST['user_phone'];
	// 'devantonovtag@yandex.ru'; 
	$email = array ($user_mail);
	$attachment = array(WP_CONTENT_DIR . '/themes/shifters-pro/quiz/admin/pdf-uploads/' . $id_user . '.pdf');
	wp_mail(
		$email,
		'Estimate',
		'Hello ' . $user_name . '! Thank you for your interest in our services. You can find a quote for the requested services attached. Feel free to call us 267-734-3419 if you have any questions.',
		array(
			'From: Estimates <noreply@directline.company>'
		),
		$attachment
	);
}

send_mail();

function send_mail_admin(){

	global $wpdb;
	$data = get_admin_mail();
	$email_admin = $data['admin_mail_address'] ?? '';
	$id_user = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_mail = $_POST['user_mail'];
    $user_phone = $_POST['user_phone'];
	// 'devantonovtag@yandex.ru'; 
	$email = array ($email_admin);
	$attachment = array(WP_CONTENT_DIR . '/themes/shifters-pro/quiz/admin/pdf-uploads/' . $id_user . '.pdf');
	wp_mail(
		$email,
		'Estimate copy',
		'Quote for order' . $id_user . '!',
		array(
			'From: Estimates <noreply@directline.company>'
		),
		$attachment
	);
}

send_mail_admin();
