<?php
/**
 * @package SiragonPlay_Meta_Devices
 * @version 1.6
 */
/*
Plugin Name: Síragon Play - Meta Devices 
Plugin URI: https://github.com/Siragon/SiragonPlay-Meta-Device
Description: This plugin save the Device ID and other data for support to customer. 
Author: Alexander Salas
Version: 1.0
Author URI: http://www.siragon.com/
*/

	//no  cache headers 
	header("Expires: Mon, 26 Jul 1990 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
  //header("Content-Type:text/xml;Charset=UTF-8");
//require 'include/config.php';
//wp-includes/meta.php
define( 'BLOCK_LOAD', true );
// require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
// require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
// $wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );
 //function usermeta_test() {
    if(!empty($_POST["id"])) {
      add_metadata('user', $_REQUEST["id"], 'IMEI', $_REQUEST["ksr"], true);
      add_metadata('user', $_REQUEST["id"], 'Serial', $_REQUEST["serial"], true);
	//add_metadata('user', $_REQUEST["id"], 'email', $_REQUEST["email"], true);
       echo get_metadata('user', $_REQUEST["id"], 'Serial', true); 
    }
// }
 //add_action( 'init', 'usermeta_test' );




?>
