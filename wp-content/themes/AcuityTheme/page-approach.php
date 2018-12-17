<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="approach-page content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

      <div class="back-to-top">    
        <img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Acuity%20Arrow%20HiFi%20Compressed/Back%20To%20Top%20Arrow.png'?>">
        <p>Back to Top</p>
      </div><!-- back-to-top -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
