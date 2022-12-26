<?php

class Moverquiz_Admin {

    public function __construct()
    {
        add_action('admin_menu', array($this,'quiz_menu'));
        add_action('admin_menu', array($this,'quiz_menu_settings'));
        add_action('get_estimates', array($this, 'get_estimates'));
        add_action('get_admin_mail', array($this, 'get_admin_mail'));
        add_action( 'admin_enqueue_scripts', array($this,'scripts_action'));

    }

    public function quiz_menu()
    {
        add_menu_page(
            'Quiz plugin',
            'Quiz',
            'manage_options',
            'quiz-main',
            array($this, 'render_main_page'),
        );
    }

    public function render_main_page() 
    {
        require_once MOVERQUIZ_PLUGIN_DIR . 'admin/admin-page.php';
    }

    public function quiz_menu_settings() 
    {
	    add_menu_page(
 	        'Quiz settings',
 	        'Quiz settings',
 	        'manage_options',
 	        'quiz-settings',
 	        array($this, 'render_settings_page'),
 	    );
    }

    public function render_settings_page() 
    {
    	require_once MOVERQUIZ_PLUGIN_DIR . 'admin/quiz-settings-page.php';
    }
    
    public function scripts_action()
    {
	    wp_enqueue_script( 'js-wp-admin', get_template_directory_uri() .'/quiz/admin/js/quiz-admin.js', '','',true);
	    wp_enqueue_script( 'js-wp-form-admin', get_template_directory_uri() .'/quiz/admin/js/form.js', '','',true);
	    wp_enqueue_script( 'send-to-client', get_template_directory_uri() .'/quiz/admin/js/send-to-client.js', '','',true);
	    wp_enqueue_style( 'css-wp-admin', get_template_directory_uri() .'/quiz/admin/css/quiz-admin.css' );
    }

    public function get_estimates() 
    {
        global $wpdb;
        
        return $wpdb->get_results( "select * from wp_mover ORDER BY id DESC ");
    }
    
    public function get_admin_mail() 
    {
        global $wpdb;
     
        return $wpdb->get_row( "select * from wp_mover_settings", ARRAY_A);
    }

}