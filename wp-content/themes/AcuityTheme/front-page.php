<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <!-- <div class="hero-image">
      <div class="hero-text">
        <h2>Our Insights. Your Advantage.</h2>
        <p>We are a different stategic avisor to GPs and LPs in the global private markets industry</p>
        <a href="#home-scroll" class="smooth-scroll">TEST SCROLL LINK</a>
          
      </div>
    </div>  -->

        <!-- <a href="#home-scroll" class="smooth-scroll">TEST SCROLL LINK</a> -->


    <!-- smooth scroll destination -->


    <!-- back to top button -->
    <!-- <div class="back-to-top">BACK TO TOP BUTTON</div> Vaughn's-->

    <div class="back-to-top">    
      <img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Up_arrow.svg'?>">
      <p>Back to Top</p>
    </div><!-- back-to-top -->

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>
    <div id="home-scroll">TEST HOME SCROLL SECTION</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
