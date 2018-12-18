<?php
/**
 * The template for displaying archive pages.
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


      <div class="careers-section"><?php

        $executive_args = array( 'post_type' => 'Careers');
        $executive_args['orderby'] = 'date';
        $executive_args['order'] = 'ASC';
        $executive_query = new WP_Query($executive_args);

        if ( have_posts() ) : ?>
        <h2>Current Openings</h2>

        <table class="careers-table">
          <tr class="carreers-table-head">
            <th>Job Title</th>
            <th>Category</th>
            <th>City</th>
            <th>Job Posted Date</th>
          </tr><?php
          
          while($executive_query->have_posts()) : $executive_query->the_post();?>
            <!-- create an if statement to check if the page has posts!!!!!!-->
              <tr class="careers-table-row">
                <td><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo CFS()->get( 'job_title' ); ?></a></td>
                <td><?php echo CFS()->get( 'category' ); ?></td>
                <td><?php echo CFS()->get( 'city' ); ?></td>
                <td><?php
                  $date = new DateTime(CFS()->get( 'posted_date' ));
                  echo $date->format('F j, Y');?>
                </td>  
              </tr> <?php

          endwhile;
          wp_reset_postdata(); 
        else : ?>
        <div class="no-careers-section">
          <h2>We are not currently hiring.</h2>
          <p>All new talent is greatly appreciated. Please contact us for future career opportunities!</p>
        </div><?php
        endif; 
          ?>
        
        </table><!-- end careers-table -->
      </div><!-- careers-section -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
