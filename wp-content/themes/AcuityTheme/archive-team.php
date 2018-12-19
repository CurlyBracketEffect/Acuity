<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class=" content-area">
		<main id="main" class="site-main" role="main">

      <div class="hero-image team-hero-image">
        <div class="hero-text">
          <h2>Our Team</h2>
        </div>
      </div>

			
      <div class="team-page">
        <h3>Our Team</h3>
        <div class="executive-section"><?php
          $executive_args = array( 'post_type' => 'Team', 'category_name' => 'Executive');
          $executive_args['orderby'] = 'date';
          $executive_args['order'] = 'ASC';
          $executive_query = new WP_Query($executive_args); // exclude category

          while($executive_query->have_posts()) : $executive_query->the_post();?>
            <div class="executive-container">

              <div class="executive-portrait">
                <img src="<?php echo CFS()->get( 'image' ); ?>">
              </div>

              <div class="executive-content">
                <h3><?php echo CFS()->get( 'name' ); ?></h3>
                <h4><?php echo CFS()->get( 'position' ); ?></h4>  
                <a href="<?php echo CFS()->get( 'linkedin' ); ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hi%20Fi%20Icons%20Compressed/Linked_In_Icon.svg ?>">
                </a>
                <a href="<?php echo CFS()->get( 'email' ); ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hi%20Fi%20Icons%20Compressed/Email_Icon.svg ?>">
                </a>
                <p><?php echo CFS()->get( 'description' ); ?></p>   
              </div>

            </div><!-- end executive-container --><?php
          endwhile;
          wp_reset_postdata(); ?>
        </div><!-- end executive-section -->

        <!-- MAY NEED TO USE THIS: echo get_permalink(get_the_ID()); -->

        <div class="supportive-section"><?php
          $supportive_args = array( 'post_type' => 'Team', 'category_name' => 'Supportive');
          $supportive['orderby'] = 'date';
          $supportivefirst_args['order'] = 'ASC';
          $supportive_query = new WP_Query($supportive_args); // exclude category

          while($supportive_query->have_posts()) : $supportive_query->the_post();?>
            <div class="supportive-container">

              <div class="supportive-portrait">
                <img src="<?php echo CFS()->get( 'image' ); ?>">
              </div>

              <div class="supportive-content">
                <h3><?php echo CFS()->get( 'name' ); ?></h3>
                <h4><?php echo CFS()->get( 'position' ); ?></h4>    
              </div>

            </div><!-- end supportive-container --><?php
          endwhile;
          wp_reset_postdata(); ?>
        </div><!-- end supportive-section -->
        <a class="button" href="<?php echo esc_url( home_url( '/experience' ) ); ?>">See Our Experience</a>
      </div>
      

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
