<?php

class DemoTheme
{
    public function __construct()
    {
        show_admin_bar(false);
        add_action('wp_enqueue_scripts', array($this, 'loadScripts'));
    }

    public function loadScripts()
    {
        wp_register_style('Animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
        wp_enqueue_style('Animate');

        wp_register_style('FontPoppins', 'https://fonts.googleapis.com/css?family=Poppins:200,300,400,700');
        wp_enqueue_style('FontPoppins');

        wp_register_style('FontAwesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
        wp_enqueue_style('FontAwesome');

        wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
        wp_enqueue_style('Bootstrap');

        wp_register_style('Theme', get_template_directory_uri() . '/assets/css/styles.css');
        wp_enqueue_style('Theme');

        wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, null, true);
        wp_enqueue_script('jQuery');

        wp_register_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', null, null, true);
        wp_enqueue_script('Popper');

        wp_register_script('BootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script('BootstrapJs');

        wp_register_script('Wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', null, null, true);
        wp_enqueue_script('Wow');

        wp_register_script('ThemeJS', get_template_directory_uri() . '/assets/js/scripts.js', null, null, true);
        wp_enqueue_script('ThemeJS');
    }
}

$demoTheme = new DemoTheme();
