<?php

if ( !defined( 'ABSPATH' ) ) exit;

class Icecream_Team4 extends \Elementor\Widget_Base {

    public function get_name() {
        return 'team4';
    }

    public function get_title() {
        return esc_html__( 'Team 4 - big', 'icecreamteam' );
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return [ 'icecream_cat' ];
    }

    function get_keywords() {
        return [ 'team', 'member', 'big' ];
    }

    public function __construct( $data = [], $args = null ) {
        parent::__construct( $data, $args );
        wp_register_style( 'icecream-team-css4', plugin_dir_url( __FILE__ ) . 'assets/css/icecream-team4.css' );
    }

    public function get_style_depends() {
        return [ 'icecream-team-css4' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section', [
                'label' => esc_html__( 'Content', 'icecreamteam' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail',
				'exclude' => [],
				'include' => [],
				'default' => 'large',
			]
		);

        $this->add_control(
			'member_name',
			[
				'label' => esc_html__( 'Name', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Rocket', 'icecreamteam' ),
				'placeholder' => esc_html__( 'Member name', 'icecreamteam' ),
			]
		);

        $this->add_control(
			'member_position',
			[
				'label' => esc_html__( 'Description', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'CEO', 'icecreamteam' ),
				'placeholder' => esc_html__( 'Member position', 'icecreamteam' ),
			]
		);
		
		$this->add_control(
			'social_link_1',
			[
				'label' => esc_html__( 'Link 1', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://fb.com/...', 'icecreamteam' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'social_icon_1',
			[
				'label' => esc_html__( 'Icon', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'social_link_2',
			[
				'label' => esc_html__( 'Link 2', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://twitter.com/...', 'icecreamteam' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'social_icon_2',
			[
				'label' => esc_html__( 'Icon', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'social_link_3',
			[
				'label' => esc_html__( 'Link 3', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://instagram.com/...', 'icecreamteam' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'social_icon_3',
			[
				'label' => esc_html__( 'Icon', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'social_link_4',
			[
				'label' => esc_html__( 'Link 4', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://pinterest.com/...', 'icecreamteam' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'social_icon_4',
			[
				'label' => esc_html__( 'Icon', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'social_link_5',
			[
				'label' => esc_html__( 'Link 5', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://pinterest.com/...', 'icecreamteam' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'social_icon_5',
			[
				'label' => esc_html__( 'Icon', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'social_link_6',
			[
				'label' => esc_html__( 'Link 6', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://pinterest.com/...', 'icecreamteam' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'social_icon_6',
			[
				'label' => esc_html__( 'Icon', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'general_style_section', [
                'label' => esc_html__( 'General', 'icecreamteam' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'h_position',
			[
				'label' => esc_html__( 'Horizontal position', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 4,
				],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'v_position',
			[
				'label' => esc_html__( 'Vertical position', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 50,
				],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
            'name_style_section', [
                'label' => esc_html__( 'Name', 'icecreamteam' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Typography', 'icecreamteam' ),
				'name' => 'name_typography',
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selector' => '{{WRAPPER}} .icecream-bigteam .member-details h3.member-name',
			]
		);
        
        $this->add_control(
			'name_color',
			[
				'label' => esc_html__( 'Color', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details h3.member-name' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_responsive_control(
			'name_align',
			[
				'label' => esc_html__( 'Alignment', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'icecreamteam' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'icecreamteam' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'icecreamteam' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details h3.member-name' => 'text-align: {{VALUE}};',
				],
			]
		);
		
        
        $this->add_responsive_control(
			'name_margin',
			[
				'label' => esc_html__( 'Margin', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details h3.member-name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'position_style_section', [
                'label' => esc_html__( 'Title', 'icecreamteam' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Typography', 'icecreamteam' ),
				'name' => 'position_typography',
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selector' => '{{WRAPPER}} .icecream-bigteam .member-details p',
			]
		);

        $this->add_control(
			'position_color',
			[
				'label' => esc_html__( 'Color', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details p' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_responsive_control(
			'position_align',
			[
				'label' => esc_html__( 'Alignment', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'icecreamteam' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'icecreamteam' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'icecreamteam' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details p' => 'text-align: {{VALUE}};',
				],
			]
		);
		
        $this->add_responsive_control(
			'position_margin',
			[
				'label' => esc_html__( 'Margin', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
            'icon_style_section', [
                'label' => esc_html__( 'Icons', 'icecreamteam' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Color', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details .social-links li i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_hover_color',
			[
				'label' => esc_html__( 'Hover color', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details .social-links li i:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_responsive_control(
			'icon_position',
			[
				'label' => esc_html__( 'Alignment', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'icecreamteam' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'icecreamteam' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'icecreamteam' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details .social-links ul' => 'justify-content: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_size',
			[
				'label' => esc_html__( 'Size', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details .social-links li i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_padding',
			[
				'label' => esc_html__( 'Padding', 'icecreamteam' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .icecream-bigteam .member-details .social-links li:not(li:last-child)' => 'padding-right: {{SIZE}}{{UNIT}};',
				],
			]
		);


        $this->end_controls_section();
    }
    
    protected function render() {
        $settings = $this->get_settings_for_display();
		$member_name = esc_html( $settings['member_name'] );
		$member_position = esc_html( $settings['member_position'] );
        $image_url = \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'image' );
        if ( ! empty( $settings['social_link_1']['url'] ) ) {
			$this->add_link_attributes( 'social_link_1', $settings['social_link_1'] );
		}
		if ( ! empty( $settings['social_link_2']['url'] ) ) {
			$this->add_link_attributes( 'social_link_2', $settings['social_link_2'] );
		}
		if ( ! empty( $settings['social_link_3']['url'] ) ) {
			$this->add_link_attributes( 'social_link_3', $settings['social_link_3'] );
		}
		if ( ! empty( $settings['social_link_4']['url'] ) ) {
			$this->add_link_attributes( 'social_link_4', $settings['social_link_4'] );
		}
		if ( ! empty( $settings['social_link_5']['url'] ) ) {
			$this->add_link_attributes( 'social_link_5', $settings['social_link_5'] );
		}
		if ( ! empty( $settings['social_link_6']['url'] ) ) {
			$this->add_link_attributes( 'social_link_6', $settings['social_link_6'] );
		}
        ?>
        
        <div class="icecream-bigteam">
            <div class="icecream-bigteam-box">
                <div class="img-container">
                    <?php echo $image_url ? $image_url : ''; ?>
                    <div class="member-details">
						<?php if( $member_name ): ?>
                        	<h3 class="member-name"><?php echo $member_name; ?></h3>
						<?php endif; ?>
						<?php if( $member_position ): ?>
                        	<p class="desciprtion"><?php echo $member_position; ?></p>
						<?php endif; ?>
                        <div class="social-links">
                            <ul>
                                <?php if( $this->get_render_attribute_string( 'social_link_1' ) ): ?>
                                <li>
                                    <a <?php echo $this->get_render_attribute_string( 'social_link_1' ); ?>>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['social_icon_1'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if( $this->get_render_attribute_string( 'social_link_2' ) ): ?>
                                <li>
                                    <a <?php echo $this->get_render_attribute_string( 'social_link_2' ); ?>>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['social_icon_2'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if( $this->get_render_attribute_string( 'social_link_3' ) ): ?>
                                <li>
                                    <a <?php echo $this->get_render_attribute_string( 'social_link_3' ); ?>>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['social_icon_3'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if( $this->get_render_attribute_string( 'social_link_4' ) ): ?>
                                <li>
                                    <a <?php echo $this->get_render_attribute_string( 'social_link_4' ); ?>>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['social_icon_4'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if( $this->get_render_attribute_string( 'social_link_5' ) ): ?>
                                <li>
                                    <a <?php echo $this->get_render_attribute_string( 'social_link_5' ); ?>>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['social_icon_5'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if( $this->get_render_attribute_string( 'social_link_6' ) ): ?>
                                <li>
                                    <a <?php echo $this->get_render_attribute_string( 'social_link_6' ); ?>>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['social_icon_6'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }

    protected function content_template() {}
}
