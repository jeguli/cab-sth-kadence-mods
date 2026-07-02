<?php
/**
 * Plugin Name: CAB Sthal Kadence Mods
 * Plugin URI: https://codebridge.se
 * Description: Laddar anpassad kod för Kadence Theme.
 * Version: 1.0.0
 * Author: CodeBridge AB
 * Author URI: https://codebridge.se
 * License: GPL2+
 * Text Domain: cab-sth-kadence-mods
 */

if (!defined('ABSPATH')) {
    exit;
}

class CAB_STH_Kadence_Mods
{
    const VERSION = '1.0.0';
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles'], 100);
    }
    
    public function enqueue_styles()
    {
        wp_enqueue_style(
            'cab-sth-kadence-mods',
            plugin_dir_url(__FILE__) . 'assets/css/custom.css',
            [],
            filemtime(plugin_dir_path(__FILE__) . 'assets/css/custom.css')
        );
    }
}

new CAB_STH_Kadence_Mods();
