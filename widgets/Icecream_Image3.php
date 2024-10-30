<?php

if ( !defined( 'ABSPATH' ) ) exit;

class Icecream_Image3 extends \Elementor\Widget_Base {

    public function get_name() {
        return 'imagegallery1';
    }

    public function get_title() {
        return esc_html__( 'Image Gallery', 'icecreameaddon' );
    }

    public function get_icon() {
        return 'eicon-gallery-justified';
    }

    public function get_categories() {
        return [ 'icecream_cat' ];
    }

    function get_keywords() {
        return [ 'text', 'typewriter' ];
    }

    public function __construct( $data = [], $args = null ) {
        parent::__construct($data, $args);
        wp_register_style( 'typewriter1_widget_css', plugin_dir_url( __FILE__ ) . 'assets/css/image3-gallery-widget.css' );
    }

    public function get_style_depends() {
        return [ 'typewriter1_widget_css' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section', [
                'label' => esc_html__( 'Content', 'icecreameaddon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'gallery', [
				'label' => esc_html__( 'Add Images', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'default' => [],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'general_style_section', [
                'label' => esc_html__( 'General Style', 'icecreameaddon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->end_controls_section();
    }
    
    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <div class="image-mosaic">
            <?php $index = 1; $cartArr = [ [ $index, 6 ], [ $index, 4 ], [ $index, 8 ], [ 4, $index ], [ 6, $index ], [ 8, $index ] ]; $randSwich = rand( 0, ( sizeof( $cartArr ) - 1 ) ); ?>
            <?php foreach ( $settings[ 'gallery' ] as $image ) { ?>
                <div class="card <?php if($index == $cartArr[ $randSwich ][ 0 ]) echo esc_html( 'card-tall' ); if($index == $cartArr[ $randSwich ][ 1 ]) echo esc_html( 'card-wide' ); ?>" style="background-image: url('<?php echo esc_attr( $image[ 'url' ] ); ?>')"></div>
            <?php $index++; } ?>
        </div>
    <?php
    }
}
