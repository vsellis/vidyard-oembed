<?php

/**
 * @package Vidyard_Oembed
 * @version 1.0.0
 */

/*
Plugin Name: Vidyard oEmbed
Plugin URI: http://#
Description: Simply registers vidyard as an oEmbed provider.
Author: VSELLIS
Version: 1.0
Author URI: http://vsellis.com
*/

wp_oembed_add_provider('http(s)://embed.vidyard.com/share/*', 'https://api.vidyard.com/dashboard/v1/oembed');
wp_oembed_add_provider('http(s)://play.vidyard.com/*', 'https://api.vidyard.com/dashboard/v1/oembed');
wp_oembed_add_provider('http(s)://*.hubs.vidyard.com/watch/*', 'https://api.vidyard.com/dashboard/v1/oembed');