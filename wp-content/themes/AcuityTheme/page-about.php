<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class = "about-container">
        <div class = "about-hero">
          <h1>About Us</h1>
          <p>Creating Advantage from Insight</p>
        </div>

        <div class = "story-content">
          <h2>Our Story</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
          <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>

        <div class = "structure-content">
          <h2>Firm Structures & Processes</h2>
            <h3>Strategy</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elit lorem ipsum dolor sit amet, consetetur sadipscing elit.</p>
            
            <h3>Team</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elit lorem ipsum dolor sit amet, consetetur sadipscing elit.</p>

            <h3>Alignments & Partnerships</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elit lorem ipsum dolor sit amet, consetetur sadipscing elit.</p>
          
            <h3>Portfolio/Track Record</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elit lorem ipsum dolor sit amet, consetetur sadipscing elit.</p>

          <div class = "cta-button">GP Strategic Advisory</div> 
          <div class = "cta-button">LP Strategic Advisory</div>  
        </div>

        <div class = "values-content">
          <p><img src = "<?php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/continuos_improvement.svg'?>"/>Continuous Improvement</p>
          <p><img src = "<?php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/brain.svg'?>"/>Intellectual Honesty</p>
          <p><img src = "<?php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/impactful_partnership.svg'?>"/>Impactful Partnerships</p>
          <p><img src = "<?php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/continuos_improvement.svg'?>"/>Continuous Improvement</p>
          <p><img src = "<?php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/honesty.svg'?>"/>Intellectual Honesty</p>
          <p><img src = "<?php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/impactful_partnership.svg'?>"/>Impactful Partnerships</p>
        </div>
      </div> <!-- #about-container -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
<!-- <//?php while ( have_posts() ) : the_post(); ?>

<//?php get_template_part( 'template-parts/content', 'page' ); ?>

<//?php endwhile; // End of the loop. ?> -->