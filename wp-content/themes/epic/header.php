<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Epic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'epic' ); ?></a>
	<header id="site-header" class="header-footer-group" role="banner">
	<div class="header-inner section-inner">
	<div class="header-titles-wrapper">
	<div class="header-titles">
	<a class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle" style="/*position: absolute;left: 0;*/">
	<img src="https://epicstudio.co/wp-content/uploads/2020/10/svg/menu.svg"></a>
	<center>
	<div class="site-logo faux-heading">
		<?php
			the_custom_logo();
		?>
	</div>
	</center></div>
	</div>
	<div class="header-navigation-wrapper">
			<nav  class="primary-menu-wrapper">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
	</header>
