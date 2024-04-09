<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php echo bloginfo('template_directory');?>/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="top-header">
	<div class="wrapper">
		<div class="top-header-left">
			<?php echo do_shortcode('[t4b-ticker]'); ?>
		</div>
		<div class="top-header-right">
			<ul>
				<li>Store and Events</li>
				<li>Gift Card</li>
				<li>Help</li>
			</ul>
		</div>
	</div>
</div>

<div class="header">
	<div class="wrapper">
			<div class="header-col-1">
				<a href="<?php echo home_url();?>"><img src="http://s691948366.onlinehome.us/demo/cosmetic/wp-content/uploads/2024/03/logo-1.png" /></a>
			</div>
			
			<div class="header-col-2">
				<div class="header-col-2-col-1">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				<div class="header-col-2-col-2">
					<?php dynamic_sidebar('header-search'); ?>
				</div>
			</div>
			
		
	</div>
</div>

<div class="header-down">
	<div class="wrapper">
		<?php
        wp_nav_menu( array( 'main-menu' => 'second-menu' ) ); ?>
	</div>
</div>