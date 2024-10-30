<?php

if ( !defined( 'ABSPATH' ) ) exit;

require_once 'AdminTrait.php';

class Admin {
    use AdminTrait;

    public function __construct() {
        add_action( 'admin_menu', [$this, 'menu'] );
        add_action( 'admin_enqueue_scripts', [$this, 'enqueue_styles'] );;
    }

    public function menu() {
        add_submenu_page(
            'tools.php',
            __( 'IceCream Elementor Addon', 'icecreameaddon' ),
            __( 'IceCream Elementor Addon', 'icecreameaddon' ),
            'manage_options',
            'icecreameaddon',
            [$this, 'menu_callback']
        );
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'icecreameaddon_style', IAE_BASE_URL . '/admin/admin.css' );
    }
}