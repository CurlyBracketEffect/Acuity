<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      **TEST EXPERIENCE PAGE..

      <div class="hero-image">
        <div class="hero-text">
          <h2>Our Experience</h2>
          <p>We have five decades of private markets, management consulting, investment banking, and other relevant experience.</p>
        </div>
      </div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
