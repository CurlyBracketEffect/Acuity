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
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'lp-advisory' ); ?>

      <?php endwhile; // End of the loop. ?>

      <div class = "services-container">
      <!--  <div class = "services-hero">
          <h1>LP Strategic Advisory</h1>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
        </div> -->

        <!-- <div class = "services-practice-area">
          <h2>Practice Areas</h2>
          <p>Our solutions provide a sophisticated investor assessment of an unbiased viewpoint on the key elements of a LP's organization.</p>
          <div class = "services-practice-1">
            <p><img src = "<?//php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/Build_Icon.svg'?>"/>Franchise Creating & Building</p>
            <ul>
              <li>Program Design Strategy Papers</li>
              <li>Asset Class and/or Geographical Business Plans</li>
              <li>Capital Allocation Studies</li>
            </ul>
          </div>
          <div class = "services-practice-2">
            <p><img src = "<?//php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/Fundraise_Icon.svg'?>"/>Fundraising Readiness</p>
            <ul>
              <li>Segmentation & Mapping</li>
              <li>Portfolio & Liquidity Forecasting</li>
              <li>Manager Benchmarking & Selection</li>
            </ul>
          </div>
          <div class = "services-practice-3">
            <p><img src = "<?//php echo get_template_directory_uri().'/assets/images/Hi Fi Icons Compressed/Investor_Icon.svg'?>"/>Investor Engagement & Management</p>
            <ul>
              <li>Investment Process & Approvals Framework</li>
              <li>Due Diligence Best Practices</li>
              <li>Investment Documentation & Presentation Approaches</li>
            </ul>
          </div>
        </div>

        <div class = "services-value-prop">
          <h2>Our Value Proposition</h2>
          <div class = "services-value-carousel">
            
          </div>
          <div class = "services-value-list">
            <ul>
              <li>Develop an execution plan that optimizes use of available internal and external resources.</li>
              <li>Establish effective communication protocols for Approval/Committees/Boards, minimize negative surprises.</li>
              <li>Construct a portfolio that satisfies your return, scale, and liquidity objectives.</li>
              <li>Establish effective manager segmentation & ranking methodologies.</li>
              <li>Ensure timely identification, evaluation and reporting of key exposures and performance metrics.</li>
              <li>Implement best-in-class investment processes and due diligence practices.</li>
              <li>Foster thoughtful, timely and transparent decision-making.</li>
              <li>Adopt a market stance/persona that drives quality partnerships and attractive deal flow.</li>
            </ul>
          </div>
        </div> -->

      </div> <!-- services-container -->
=======
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

>>>>>>> master
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
