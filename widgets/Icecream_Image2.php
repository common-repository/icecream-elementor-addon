<?php

if ( !defined( 'ABSPATH' ) ) exit;

class Icecream_Image2 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'image2';
    }

    public function get_title()
    {
        return esc_html__( 'Menu Image', 'icecreameaddon' );
    }

    public function get_icon()
    {
        return 'eicon-image-box';
    }

    public function get_categories()
    {
        return [ 'icecream_cat' ];
    }

    function get_keywords()
    {
        return [ 'title', 'image', 'menu' ];
    }

    public function __construct( $data = [], $args = null )
    {
        parent::__construct($data, $args);
        wp_register_style( 'image2_widget', plugin_dir_url( __FILE__ ) . 'assets/css/image2-widget.css' );
    }

    public function get_style_depends()
    {
        return [ 'image2_widget' ];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Content', 'icecreameaddon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__( 'Choose Image', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'menu_item_title',
            [
                'label' => esc_html__( 'Title', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Item1', 'icecreameaddon' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'menu_item_link',
            [
                'label' => esc_html__( 'Link', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( '#', 'icecreameaddon' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'menu_item_color',
            [
                'label' => esc_html__( 'Color', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
            'menu_item',
            [
                'label' => esc_html__( 'Menu items', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'menu_item_title' => esc_html__( 'Home', 'icecreameaddon' ),
                        'menu_item_link' => esc_html__( '#', 'icecreameaddon' ),
                        'menu_item_color' => '#fff'
                    ],
                    [
                        'menu_item_title' => esc_html__( 'About', 'icecreameaddon' ),
                        'menu_item_link' => esc_html__( '#', 'icecreameaddon' ),
                        'menu_item_color' => '#fff'
                    ],
                    [
                        'menu_item_title' => esc_html__( 'Contact', 'icecreameaddon' ),
                        'menu_item_link' => esc_html__( '#', 'icecreameaddon' ),
                        'menu_item_color' => '#fff'
                    ],
                ],
                'title_field' => '{{{ menu_item_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'general_style_section',
            [
                'label' => esc_html__( 'General Style', 'icecreameaddon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'menu_back',
			[
				'label' => esc_html__( 'Menu back color', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} #icecream_image2_widget.hover-menu .icecream_image2_menu_list' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'image_hover_back',
			[
				'label' => esc_html__( 'Image hover back color', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000',
				'selectors' => [
                    '{{WRAPPER}} #icecream_image2_widget.hover-menu' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Items typography', 'icecreameaddon' ),
				'name' => 'Item_typography',
				'selector' => '{{WRAPPER}} #icecream_image2_widget.hover-menu .icecream_image2_menu_list a',
			]
		);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        if ( !empty( $settings[ 'menu_item_link' ][ 'url' ] ) ) {
            $this->add_link_attributes( 'menu_item_link', $settings[ 'menu_item_link' ] );
        } ?>
        <figure id="icecream_image2_widget" class="hover-menu">
            <img src="<?php echo esc_html( $settings[ 'image' ][ 'url' ] ); ?>">
            <div class="icecream_image2_menu_list">
                <?php if ( $settings[ 'menu_item' ] ) :
                    foreach ( $settings[ 'menu_item' ] as $item ) {
                        $title = sanitize_text_field( $item[ 'menu_item_title' ] );
                        ?>
                        <a href="<?php echo esc_html( $this->get_render_attribute_string( 'menu_item_link' ) ); ?>" class="elementor-repeater-item-<?php echo esc_attr( $item[ '_id' ] ) ?>">
                            <?php echo esc_html( $title ); ?>
                        </a>
                <?php }
                endif; ?>
            </div>
        </figure>
<?php
    }
}
