<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pinely
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();  ?>
<link rel="icon" href="<?php echo fw_get_db_settings_option('logo-image')['url']; ?>" type="image/x-icon" />
</head>
<body>
	<div class="main">
	<header class="header">
	<div class="container">
		<div class="logo">
			<img src="<?php echo fw_get_db_settings_option('logo-image')['url']; ?>">
			<a href="<?php echo get_home_url();?>"><h1 class="logoText" max-length=5><?php bloginfo('name') ?></h1></a>

		</div>
	</div>
	</header>
	<div class="container">