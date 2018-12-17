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

				<?php get_template_part( 'template-parts/content', 'experience' ); ?>

			<?php endwhile; // End of the loop. ?>

      <!-- <div class = "experience-hero">
        <h1>Our Experience</h1>
        <p>We have over five decades or private markets, management consulting, investment banking, and other relevant experience.</p>
      </div>

      <div class="experience-info">
        <div class="experience-1">
          <h2>We have built trusted relationships with GPs and LP globally</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
        </div>
        <div class="experience-2">
          <h2>Our experience working with CPPIB, TPG, OMERS, CIBC, BCG and Korn Ferry</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
        </div>
      </div>

      <div class="experience-quote">
        <p>"All members of my search committee were impressed by the level of Caldwell Partners' professionalism, attention to detail and ability to keep us on track."</p>
        <div class="quote-author">
          <p>Kevin Chan</p>
          <p>Consulting Manager</p>
          <p>Dynamic Funds</p>
        </div>
      </div>

      <div class="key-experiences">
        <div class="experience-27">
          <p>27+ Years Private Markets Experience</p>
        </div>
        <div class="expereince-23">
          <p>23+ Years Additional Relevant Experience</p>
        </div>
        <div class="experience-team">
          <p>Meet Our Team</p>
        </div>
      </div> -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
