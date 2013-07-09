<?php 
/*
Plugin Name: oik-css
Plugin URI: http://www.oik-plugins.com/oik-plugins/oik-css
Description: Implements [bw_css] shortcode for internal CSS styling and to help document CSS examples and [bw_geshi] for other languages
Version: 0.2   
Author: bobbingwide
Author URI: http://www.bobbingwide.com
License: GPL2

    Copyright 2013 Bobbing Wide (email : herb@bobbingwide.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/
/**
 * Implement "oik_loaded" action for oik-css
 */
function oik_css_init() {
  bw_add_shortcode( "bw_css", "oik_css", oik_path( "shortcodes/oik-css.php", "oik-css" ), false );
  bw_add_shortcode( "bw_geshi", "oik_geshi", oik_path( "shortcodes/oik-geshi.php", "oik-css" ), false );
  bw_better_autop();
}
 
/**
 * Improve wpautop and shortcode_unautop processing
 * 
 * @link http://stackoverflow.com/questions/5940854/disable-automatic-formatting-inside-wordpress-shortcodes
 *
 */
function bw_better_autop() {
  //move wpautop filter to AFTER shortcode is processed
  remove_filter( 'the_content', 'wpautop' );
  add_filter( 'the_content', 'wpautop' , 99);
  add_filter( 'the_content', 'shortcode_unautop',100 );
}  

/**
 * Set the plugin server. Not necessary for a plugin on WordPress.org
 */
// function oik_css_admin_menu() {
//  oik_register_plugin_server( __FILE__ );
//}

/**
 * Implement "admin_notices" for oik-css to check plugin dependency
 */ 
function oik_css_activation() {
  static $plugin_basename = null;
  if ( !$plugin_basename ) {
    $plugin_basename = plugin_basename(__FILE__);
    add_action( "after_plugin_row_" . $plugin_basename, __FUNCTION__ );   
    require_once( "admin/oik-activation.php" );
  }  
  $depends = "oik:2.0";
  oik_plugin_lazy_activation( __FILE__, $depends, "oik_plugin_plugin_inactive" );
}

/**
 * Function to run when the plugin file is loaded 
 */
function oik_css_plugin_loaded() {
  add_action( "admin_notices", "oik_css_activation" );
  //add_action( "oik_admin_menu", "oik_css_admin_menu" );
  add_action( "oik_loaded", "oik_css_init" );
}

oik_css_plugin_loaded();


