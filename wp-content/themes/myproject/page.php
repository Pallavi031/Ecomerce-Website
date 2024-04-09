<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>

<div class="inner_head">
	<!--featured image code-->
	<?php if(has_post_thumbnail()){ ?><?php the_post_thumbnail('full'); } else {?>
	<img src="http://s691948366.onlinehome.us/demo/cosmetic/wp-content/uploads/2024/04/bann.jpg" alt="inner-banner"/>
	<?php } ?>
	<div class="inner-title">
	<div class="wrapper">
	<h1><?php the_title(); ?></h1>
		<div <?php if(is_front_page()) {?> class="breadcrumb-hide" <?php } else { ?> class="breadcrumb" <?php } ?>>

			<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
			?></div>
	</div>
	</div>
</div>
<?php 

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
