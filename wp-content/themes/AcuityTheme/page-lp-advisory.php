<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      **TEST LP ADVISORY PAGE..

      <div class="hero-image">
        <div class="hero-text">
          <h2>LP Strategic Advisory</h2>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
        </div>
      </div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
