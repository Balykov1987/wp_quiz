<?php

 add_action( 'wp_enqueue_scripts', 'quiz_scripts' );
  
 function quiz_scripts() {
 	if( is_page( 'estimates' ) ) {
 	 	wp_enqueue_script( 'quiz-script', get_stylesheet_directory_uri() . '/quiz/js/quiz.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'quiz-functions-script', get_stylesheet_directory_uri() . '/quiz/js/quiz-functions.js', array( 'jquery' ), null, true );
        //wp_enqueue_script( 'maskedinput-script', get_stylesheet_directory_uri() . '/quiz/js/form.js', array( 'jquery' ) );
 	}
 }

