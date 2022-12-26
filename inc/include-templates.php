<?php

add_filter( 'template_include', 'add_template' );
function add_template( $template ) {

	if( is_page('estimates') ){
		if ( $new_template = locate_template( array( 'quiz/public/main.php' ) ) )
			return $new_template ;
	}

	if( is_page('thank-you') ){
		if ( $new_template = locate_template( array( 'quiz/public/thank-you.php' ) ) )
			return $new_template ;
	}

	return $template;

}