<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package velvet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<?php
  $header_background_color = get_option('header_background_color');
  $content_link_color = get_option('content_link_color');
  $tags_background_coolor = get_option('tags_background_color');
  $tags_post_footer = get_option('tags_post_footer');
  $logo = get_option('velvet_logo');
  $header_image = get_option('velvet_header_image');

?>
<!-- LOGO SECTION -->

<style>
	.site-header { background: url(	<?php echo $header_image ?>) no-repeat center center fixed; background-size: cover;}
	.logo {background-image: url(	<?php echo $logo ?>) } 
	.site-header { background-color:  <?php echo $header_background_color; ?>; }
	.entry-content a { color:  <?php echo $content_link_color; ?>; }
	.categories-navigation a { background-color: <?php echo $tags_background_coolor ?>;}
	.entry-footer a, .cat-links a { background-color: <?php echo $tags_post_footer ?>; }
</style>
<!-- LOGO SECTION END -->
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'velvet' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- <button class="menu-toggle"><?php _e( 'nav', 'velvet' ); ?></button> -->
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav class="categories-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</nav>

		<div class="logo"></div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">

