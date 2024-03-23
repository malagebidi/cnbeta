<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cnBeta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-bs-theme="auto">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="referrer" content="never">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container-fluid py-3">

	<?php if ( !is_singular() ) : ?>
	<header id="masthead" class="site-header border-bottom mb-3 ratio ratio-4x3">
		<div class="site-branding">
				<h1 class="site-title fw-bold m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link-dark text-decoration-none" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
	</header>
	<?php endif; ?>
