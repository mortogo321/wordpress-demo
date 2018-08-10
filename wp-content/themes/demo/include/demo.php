<?php

class DemoTheme
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'loadScripts'));
    }

    public function loadScripts()
    {
        wp_register_style('FontAwesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
        wp_enqueue_style('FontAwesome');

        wp_register_style('BootstrapCss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
        wp_enqueue_style('BootstrapCss');

        wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, null, true);
        wp_enqueue_script('jQuery');

        wp_register_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', null, null, true);
        wp_enqueue_script('Popper');

        wp_register_script('BootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script('BootstrapJs');
    }
}

$demoTheme = new DemoTheme();
