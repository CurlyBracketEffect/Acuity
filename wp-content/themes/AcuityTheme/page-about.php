<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'about' ); ?>

<?php endwhile; // End of the loop. ?>
    
    <div class="back-to-top">    
      <img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Up_arrow.svg'?>">
      <p>Back to Top</p>
    </div><!-- back-to-top -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
