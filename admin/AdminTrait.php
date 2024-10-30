<?php

if ( !defined( 'ABSPATH' ) ) exit;

trait AdminTrait {
    public function menu_callback() {
        ?>
        <div id="icecreameaddon" class="wrap">
            <h1><?php esc_html_e( 'IceCream Elementor Addon', 'icecreameaddon' ); ?></h1>
            <article class="tabs">
                <input id="two" name="tabs" type="radio" value="Two">
                <label for="two">Overview</label>

                <input checked id="one" name="tabs" type="radio">
                <label for="one">About</label>

                <div class="panels">
                    <div class="panel">
                        <p style="font-size:17px;">Thank you for using IceCream Elementor Addon plugin. IceCream Elementor Addon is an addon for Elementor page builder plugin. In next line you can find if Elementor is active on WordPress or not.</p>
                        <p style="font-size:17px;"><?php echo is_plugin_active('elementor/elementor.php') ? 'elementor is <span style="color:green;font-weight:bold">active</span> and your ready to go :)' : 'elementor is <span style="color:red;font-weight:bold">NOT active</span> and you should install/active Elementor.';?></p>
                    </div>
                    <div class="panel">
                        <h2>Welcome to IceCream Elementor Addon plugin</h2>
                        <p style="font-size:17px;">IceCream Elementor Addon is a Free plugin which you could use it.</p>
                        <p style="font-size:17px;">You can reach me by <a href="mailto:reza.masoumpour.a@gmail.com">reza.masoumpour.a@gmail.com</a></p>
                    </div>
                </div>
            </article>
        </div>
        <?php
    }
}