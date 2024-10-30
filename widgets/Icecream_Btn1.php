<?php

if (!defined('ABSPATH')) exit;

class Icecream_Btn1 extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'btn1';
    }

    public function get_title()
    {
        return esc_html__('Expand Button', 'icecreameaddon');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['icecream_cat'];
    }

    function get_keywords()
    {
        return ['button', 'expanding'];
    }

    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);
        wp_register_style('btn1_widget_css', plugin_dir_url(__FILE__) . 'assets/css/btn1-widget.css');
    }

    public function get_style_depends()
    {
        return ['btn1_widget_css'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'icecreameaddon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__('Text', 'icecreameaddon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Button', 'icecreameaddon'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'expanding_direction',
            [
                'label' => esc_html__( 'Direction', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'icecreameaddon' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'icecreameaddon' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'right',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn:hover span.icon' => '{{VALUE}}: -25px;',
                    '{{WRAPPER}} .expanding-btn .btn:hover span:not(.button-text)' => 'padding-{{VALUE}}: 25px;',
                    '{{WRAPPER}} .expanding-btn .btn span.icon' => '{{VALUE}}: -20px;',
                ],
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'button_style_section',
            [
                'label' => esc_html__('Button', 'icecreameaddon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
        'btn_back_color',
            [
                'label' => esc_html__('Background-color', 'icecreameaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#7983FF',
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_hover_background',
            [
                'label' => esc_html__('Hover Background-color', 'icecreameaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#A258A5',
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'icon_style_section',
            [
                'label' => esc_html__('Icon', 'icecreameaddon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'icon_width',
            [
                'label' => esc_html__( 'Width', 'icecreameaddon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em', 'rem' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__('Color', 'icecreameaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn .icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'text_style_section',
            [
                'label' => esc_html__('Text', 'icecreameaddon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'text_typography',
                'selector' => '{{WRAPPER}} .expanding-btn .btn',
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => esc_html__('Color', 'icecreameaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'text_hover_color',
            [
                'label' => esc_html__('Hover color', 'icecreameaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .expanding-btn .btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $btn_text = sanitize_text_field($settings['btn_text']);
        if($btn_text): ?>
        <div class="icecream-addon expanding-btn">
            <button class="btn">
                <span>
                    <span class="button-text"><?php echo $btn_text; ?></span>
                    <?php if( $settings['icon']['value'] ): ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                    <?php endif; ?>
                </span>
            </button>
        </div>
        <?php endif;
    }
}
