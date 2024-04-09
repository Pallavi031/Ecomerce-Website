<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="banner">
	<img src="http://s691948366.onlinehome.us/demo/iceland/wp-content/uploads/2023/12/banner.jpg">
	<div class="banner-caption">
		<div class="wrapper">
			<h3>The Ultimate Experience</h3>
			<h2>Northern Lights</br> 
			and Iceland</h2>
		</div>
	</div>
</div>

<?php 
$id=2; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
?>

<?php 
get_footer();
