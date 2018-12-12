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

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>
      
      <div class="approach-block-container">
        <div class="left-block left-block-translate"></div>
        <div class="right-block right-block-translate"></div>
        <div class="center-block center-block-translate"></div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
