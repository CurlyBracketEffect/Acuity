<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      **TEST CONTACT PAGE..
      
      <div class="hero-image">
        <div class="hero-text">
          <h2>Contact Us</h2>
        </div>
			</div>

			
			<form method="post" action="mailto:test.email@testmail.com" >

			  <input type="submit" value="Send Email" /> 
			</form>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>