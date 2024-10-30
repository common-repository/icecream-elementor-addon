<?php

if (!defined('ABSPATH')) exit;

class Icecream_Image1 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'image1';
	}

	public function get_title() {
		return esc_html__( 'Image 1', 'icecreameaddon' );
	}

	public function get_icon() {
		return 'eicon-image-box';
	}

	public function get_categories() {
		return [ 'icecream_cat' ];
	}

	function get_keywords() {
		return [ 'title', 'image' ];
	}

	public function __construct($data = [], $args = null) {
		parent::__construct( $data, $args );
		wp_register_style( 'image1_widget', plugin_dir_url( __FILE__ ) . 'assets/css/image1-widget.css' );
	}

	public function get_style_depends() {
		return [ 'image1_widget' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section', [
				'label' => esc_html__( 'Content', 'icecreameaddon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image', [
				'label' => esc_html__( 'Choose Image', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'icecreameaddon' ),
			]
		);

		$this->add_control(
			'description', [
				'label' => esc_html__( 'Description', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'icecreameaddon' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'general_style_section', [
				'label' => esc_html__( 'General Style', 'icecreameaddon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'element_direction', [
				'label' => esc_html__( 'Alignment', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'icecreameaddon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'icecreameaddon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'icecreameaddon' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'none',
				'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .icecream_image1_card .content' => 'text-align: {{VALUE}};',
                ],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'image_style_section', [
				'label' => esc_html__( 'Image Style', 'icecreameaddon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'img_border', [
				'label' => esc_html__( 'Border radius', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'default' => [ 'size' => 0 ],
				'selectors' => [
					'{{WRAPPER}} .icecream_image1_card img' => 'border-radius: {{SIZE}}px;',
				],
			]
		);

		$this->add_control(
			'img_top_margin', [
				'label' => esc_html__( 'Image movement on hover', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					]
				],
				'default' => [ 'size' => 80 ],
				'selectors' => [
					'{{WRAPPER}} .icecream_image1_card:hover img' => 'margin-top: -{{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .icecream_image1_card:focus-within img' => 'margin-top: -{{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_style_section', [
				'label' => esc_html__( 'Title Style', 'icecreameaddon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color', [
				'label' => esc_html__( 'Title Color', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icecream_image1_card .icecream_image1_title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .icecream_image1_card .icecream_image1_title',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'description_style_section', [
				'label' => esc_html__( 'Description Style', 'icecreameaddon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'desc_color', [
				'label' => esc_html__( 'Title Color', 'icecreameaddon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icecream_image1_card .icecream_image1_desc' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name' => 'desc_typography',
				'selector' => '{{WRAPPER}} .icecream_image1_card .icecream_image1_desc',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
        $title = $settings[ 'title' ] ? sanitize_text_field( $settings[ 'title' ] ) : '';
        $description = $settings[ 'description' ] ? sanitize_textarea_field( $settings[ 'description' ] ) : '';
        ?>
        <div class="icecream-addon icecream_image1_card-container">
            <div class="icecream_image1_card">
                <img src="<?php echo esc_html( $settings[ 'image' ][ 'url' ] ); ?>">
                <div class="content">
                    <?php if( $title ): ?>
                        <p class="icecream_image1_title"><?php echo esc_html( $title ); ?></p>
                    <?php endif; ?>
                    <?php if( $description ): ?>
                        <div class="icecream_image1_focus_content">
                            <p class="icecream_image1_desc"><?php echo esc_html( $settings[ 'description' ] ); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	<?php
	}
}
