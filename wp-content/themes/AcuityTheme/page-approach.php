<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<<<<<<< HEAD
      **TEST APPROACH PAGE..
      
      <div class="hero-image">
        <div class="hero-text">
          <h2>Our Approach</h2>
          <p>We partner with senior professionals at an organization to generate insights
             and develop solutions/strategies that create enduring competitive advantage.
          </p>
        </div>
      </div>  

=======
>>>>>>> master
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

<<<<<<< HEAD
			<?php endwhile; // End of the loop. ?>
=======
      <?php endwhile; // End of the loop. ?>
      
      <div class="approach-block-container">
        <div class="left-block left-block-translate"></div>
        <div class="right-block right-block-translate"></div>
        <div class="center-block center-block-translate"></div>
      </div>
>>>>>>> master

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
