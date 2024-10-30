<?php

/**
 * Plugin Name: IceCream Elementor Addon
 * Description: Elementor awesome and free element.
 * Author: Reza Masoumpour
 * Author URI: https://themio.ir/
 * Requires at least: 5.0
 * Version: 2.0
 * Licence: GPL v2 or later
 * Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: icecreameaddon
 * Domain Path: /languages
*/

if ( !defined( 'ABSPATH' ) ) exit;

class Core {
    public function __construct() {
        $this->define_constats();
        $this->load_includes();
        $this->load_textdomain();
        $this->register_addons();
        new Admin();
    }

    public function define_constats() {
        define( 'IAE_BASE', dirname( __FILE__ ) );
        define( 'IAE_BASE_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
    }

    public function load_includes() {
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        require_once IAE_BASE . '/admin/Admin.php';
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'icecreameaddon', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }

    public function register_addons() {
        add_action( 'elementor/widgets/register', [ $this, 'addons'] );
        add_action( 'elementor/elements/categories_registered', [ $this, 'addons_categories' ] );
    }

    public function addons( $widgets_manager ) {
        $addons_list = [ 'Icecream_Btn1', 'Icecream_Image1', 'Icecream_Image2',
            'Icecream_Image3', 'Icecream_Team1', 'Icecream_Team2', 'Icecream_Team3', 'Icecream_Team4',
            'Icecream_Team5' ];

        foreach ( $addons_list as $addon ) {
            require_once( __DIR__ . '/widgets/' . $addon . '.php' );
            $widget_class = '\\' . $addon;
            if ( class_exists( $widget_class ) ) {
                $widgets_manager->register( new $widget_class() );
            }
        }
    }

    public function addons_categories( $elements_manager ) {
        $elements_manager->add_category(
            'icecream_cat', [
                'title' => esc_html__( 'IceCream Elementor Addon', 'icecreameaddon' ),
                'icon' => 'fa fa-plug',
            ]
        );
    }
}
new Core();

