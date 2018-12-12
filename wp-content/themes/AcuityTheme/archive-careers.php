<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
      </header><!-- .page-header -->



      <div class="careers-section"><?php
        $executive_args = array( 'post_type' => 'Careers');
        $executive_args['orderby'] = 'date';
        $executive_args['order'] = 'ASC';
        $executive_query = new WP_Query($executive_args); // exclude category

        while($executive_query->have_posts()) : $executive_query->the_post();?>
          <div class="careers-container">

            <div class="careers-content">
              <h3><?php echo CFS()->get( 'job_title' ); ?></h3>
              <p><?php echo CFS()->get( 'description' ); ?></p>
              <h4><?php echo CFS()->get( 'start_date' ); ?></h4>  
            </div>

          </div><!-- end careers-container --><?php
        endwhile;
        wp_reset_postdata(); ?>
      </div><!-- careers-section -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
