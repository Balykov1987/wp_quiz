<?php

add_action( 'wp_enqueue_scripts', 'quiz_styles', 25 );
 
function quiz_styles() {
	if( is_page( 'estimates' ) ) {
	 	wp_enqueue_style( 'quiz-style', get_stylesheet_directory_uri() . '/quiz/css/quiz.css',
         array(), );
	}
	if( is_page( 'thank-you' ) ) {
		wp_enqueue_style( 'quiz-style', get_stylesheet_directory_uri() . '/quiz/css/quiz.css',
		array(), );
   }
}