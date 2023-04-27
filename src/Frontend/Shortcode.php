<?php 

namespace Webtop\StarterPlugin\Frontend;
/**
 * shortcode handler
 */

 class Shortcode{
    function __construct()
    {
        add_shortcode('webtopshortcode',[$this,'render_shortcode']);

    }
    public function render_shortcode($attr,$content=''){
        echo 'Hello from shortcode';
    }
 }