<?php

/**
 * Theme-skel - A Wordpress theme skeleton using VueJS + Boilerplate
 * 
 * @package theme-skel
 * @author D8vjork <d8vjork@outlook.com>
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require  __DIR__.'/vendor/autoload.php';

// Instantiate Boilerplate
$theme = new Boilerplate();

// Setup template
$theme->setup('boilerplate', [
	'formats' => [
		'aside', 'gallery', 'quote', 'image', 'video',
	],
	'menus'	=> [
		'primary' 	=> 'Primario',
		'secondary'	=> 'Secundario',
	],
	'support' => [
		'automatic-feed-links',
	],
]);