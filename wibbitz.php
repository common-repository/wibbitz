<?php
	/*
	Plugin Name: Wibbitz
	Description: This plugin allows wordpress site to embed Wibbitz player inside a post using shortcode.
	Author: Wibbitz
	*/

	// Add shortcode
	add_shortcode('wibbitz-player', 'wibbitz_player_init');

	/*
	* Inits Wibbitz Player
	*
	* @param 	$atts 	shortcode's attributes
	*/
	function wibbitz_player_init($atts) {

		// Get all parameters
		$atts = shortcode_atts(array(
			'wibbitz-clip-id' => 'wibbitz-clip-id',
			'wibbitz-autoplay' => 'wibbitz-autoplay',
			'wibbitz-mute' => 'wibbitz-mute',
			'wibbitz-next' => 'wibbitz-next',
			'wibbitz-hovertounmute' => 'wibbitz-hovertounmute',
			'wibbitz-poster' => 'wibbitz-poster'
		), $atts);

		// Load static embed script
		wp_enqueue_script('script', plugin_dir_url(__FILE__) . 'script.js');

		// Handle autoplay mute
		if ($atts['wibbitz-autoplay'] === "true" && $atts['wibbitz-mute'] === "true") {
			return '<div wibbitz="wbtz-static-embed" wibbitz-poster="' . $atts['wibbitz-poster'] . '" wibbitz-clip-id="' . $atts['wibbitz-clip-id'] . '" wibbitz-autoplay="' . $atts['wibbitz-autoplay']  . '" wibbitz-mute="' . $atts['wibbitz-mute'] . '" wibbitz-next="' . $atts['wibbitz-next'] . '" wibbitz-hovertounmute="' . $atts['wibbitz-hovertounmute'] . '"></div>';
		} else {
			return '<div wibbitz="wbtz-static-embed" wibbitz-poster="' . $atts['wibbitz-poster'] . '" wibbitz-clip-id="' . $atts['wibbitz-clip-id'] . '" wibbitz-autoplay="' . $atts['wibbitz-autoplay']  . '" wibbitz-mute="' . $atts['wibbitz-mute'] . '" wibbitz-next="' . $atts['wibbitz-next'] . '"></div>';
		}
	}
?>