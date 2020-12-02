<?php
/*
Plugin Name: Disable Guten-berg editor
Plugin URI: https://labateriarecargable.com/#servicios_soluciones
Description: Disables the default Guten-berg editor in wordpress since 5.x.
Version: 1.0
Author: LaBateríaRecargable
Author URI: https://labateriarecargable.com/
Text Domain: lbr-dge
License: GPL2
*/

defined('ABSPATH') or die("Bye bye");
define('LBR_DGE_ROUTE',plugin_dir_path(__FILE__));

if (!class_exists('Ultraleet\WP\RequirementsChecker')) {
	require_once('RequirementsChecker.php');
}

$requirementsChecker = new \Ultraleet\WP\RequirementsChecker(array(
    'title' => 'Disable Guten-berg editor',
    'file' => LBR_DGE_ROUTE, 
    'php' => '5.6',
    'wp' => '4.9'
));

if ($requirementsChecker->passes()) {
	add_filter('use_block_editor_for_post_type', '__return_false', 100);  
}
?>