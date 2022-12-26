<?php

class Moverquiz {

    public function __construct()
    {
        $this->load_dependencies();
        //$this->init_hooks();
        $this->define_admin_hooks();
        //$this->define_public_hooks();
    }

    private function load_dependencies() 
    {
        require_once MOVERQUIZ_PLUGIN_DIR . 'admin/class-moverquiz-admin.php';
        //require_once MOVERQUIZ_PLUGIN_DIR . 'public/class-moverquiz-public.php';
    }

    private function define_admin_hooks() {
        $plugin_admin = new Moverquiz_Admin();
    }

}