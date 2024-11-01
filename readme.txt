=== Wibbitz Video Player ===

Plugin Name: Wibbitz Video Player
Tags: Video, Wibbitz
Plugin URI: http://wibbitz.com
Author: Wibbitz
Contributors: Wibbitz
Description: An easy way to embed Wibbitz video players on every page of your site.
Version: 0.2
Stable tag: 0.2
Tested up to: 0.2
Requires at least: 0.2
Author URI: http://wibbitz.com
License: GPL2+

== Description ==
The Wibbitz Video Player plugin makes it easy to embed Wibbitz players on every page of your WordPress site.
All you have to do is install the plugin, add the [wibbitz-player] shortcode with your video ID and player settings to your page, and Publish your video in the Wibbitz Control Room.
Voilà! Your site is now integrated with the Wibbitz platform. Check out [this blog post](http://blog.wibbitz.com/wordpress-plugin-streamlines-video-distribution-monetization) to learn more about the Wibbitz plugin and video players.

== Wibbitz Video Player Settings ==

+ **First video:** Designate with Wibbitz video ID (found at the end of video URL)
+ **Next video:** Auto, manual, or auto delay
+ **Play:** Autoplay, click-to-play, or scroll-to-play
+ **Sound:** Sound on, mute, or hover to unmute
+ **Video title:** Show on video poster

== Wibbitz Video Player Usage ==

**First video:** wibbitz-clip-id=”[INSERT ID]” (found at the end of video URL)
**Next video:** wibbitz-next=”auto” | wibbitz-next=”manual” | wibbitz-next=”auto-delay”
**Play:** wibbitz-autoplay=”true” | wibbitz-autoplay=”false” | wibbitz-autoplay=”scroll”
**Sound:** wibbitz-mute=”false” | wibbitz-mute=”true” | wibbitz-hovertounmute=”true”
*Hover to unmute only works when both autoplay and mute = “true”
**Video title:** wibbitz-poster=”title”

== Full Usage Example ==

‘[wibbitz-player wibbitz-clip-id="b8a8ff52014cd408ea8a3b219b428d084" wibbitz-next="auto" wibbitz-autoplay="false" wibbitz-mute="true" wibbitz-poster=”title”]’

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wibbitz` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress