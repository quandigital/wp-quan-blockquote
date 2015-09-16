<?php

/**
 *   Plugin Name: Quan Blockquote Shortcode
 *   Plugin URI: https://github.com/quandigital/wp-quan-blockquote
 *   Author: Quan Digital GmbH
 *   Author URI: http://www.quandigital.com/
 *   Description: Adds blockquote/cite shortode
 *   Version: 1.0.1
 *   License: MIT
 */

defined('ABSPATH') or die();

function quanBlockquote($atts, $content = null)
{
    if (!is_null($content)) {
        if (isset($atts['name'])) {
            $src = $atts['name'];
            if (isset($atts['source'])) {
                $src = '<a href="' . $atts['source'] . '" target="_blank">' . $atts['name'] . '</a>';
            }
        } else {
            if (isset($atts['source'])) {
                $src = '<a href="' . $atts['source'] . '" target="_blank">' . $atts['source'] . '</a>';
            }
        }

        if (isset($src)) {
            return '<blockquote class="quan-blockquote"><p>' . $content . '</p><footer><cite>' . $src . '</cite><footer></blockquote>';    
        }

        return '<blockquote class="quan-blockquote"><p>' . $content . '</p></blockquote>';
    }

    return;
}

add_shortcode('quote', 'quanBlockquote');
