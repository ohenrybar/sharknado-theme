<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sharknado theme
 */
 
/* opens up html*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- loads various character sets and wordpress vital files -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--opens up the wordpress head -->
<?php wp_head(); ?>
</head>

<!-- opens a body withing the header-->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sharknado-theme' ); ?></a>
	<!-- names the header-->
	<header id="masthead" class="site-header" role="banner">
		<!--opens a div for content-->
		<div class="site-branding">
			<!--loads logo image and set site title, then makes it a clickable link-->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="https://phoenix.sheridanc.on.ca/~ccit1810/wp-content/uploads/2014/07/TorontoSharknado.png" alt="<?php bloginfo('name'); ?>" /><?php bloginfo( 'name' ); ?></a> <a href="<?php bloginfo('url'); ?>"></a></h1>
			<!--place to display site description, if one is created-->
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<!--creates main navigation bar-->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!--creates navigation toggle button (for small screens)-->
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'sharknado-theme' ); ?></button>
			<!--displays menu items in an array-->
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<!--loads search bar within the navigation menu-->
		<div class="header-search"><?php get_search_form(); ?></div>
		</nav> <!-- #site-navigation -->
		
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">