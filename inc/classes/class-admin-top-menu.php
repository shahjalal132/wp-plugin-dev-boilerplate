<?php

namespace BOILERPLATE\Inc;

use BOILERPLATE\Inc\Traits\Program_Logs;
use BOILERPLATE\Inc\Traits\Singleton;

class Admin_Top_Menu {

    use Singleton;
    use Program_Logs;

    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'admin_menu', [ $this, 'register_admin_top_menu' ] );
    }

    public function register_admin_top_menu() {
        add_menu_page(
            'Page Title',
            'Menu Title',
            'manage_options',
            'menu-slug',
            [ $this, 'menu_callback_html' ],
            'dashicons-admin-generic',
            35
        );
    }

    public function menu_callback_html() {
        include_once PLUGIN_BASE_PATH . '/templates/template-admin-top-menu.php';
    }

}