<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <div class="hero-image careers-hero-image">
      <div class="hero-text">
        <h2>Careers</h2>
      </div>
    </div>

    <div class="careers-section single-careers-section">
      <div class="careers-content">
        <h2><?php echo CFS()->get( 'job_title' ); ?></h2>
        <h3>City/Province: <?php echo CFS()->get( 'city' ); ?></h3>
        <h3>Job Type: <?php echo CFS()->get( 'job_type' ); ?></h3>
        <h3>Posted Date: <?php 
          $date = new DateTime(CFS()->get( 'posted_date' ));
          echo $date->format('F j, Y');?>
        </h3>
        <p>Job Description<br><?php echo CFS()->get( 'description' ); ?></p>
        <p>Responsibilities<br><?php echo CFS()->get( 'responsibilities' ); ?></p>

        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a>
      </div>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
