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

				<?php get_template_part( 'template-parts/content', 'contact-us' ); ?>

			<?php endwhile; // End of the loop. ?>

      <div class="contact-container">
			
				<!-- <div class="contact-hero">
					<h1>Contact Us</h1>
				</div> -->

				<!-- <div class="contact-partners">
					<div class="contact-julie">
						<img src=""/>
						<h2>Julie Gray</h2>
							<p>Founding Partner</p>
							<p>jgray@acuitypartners.ca</p>
							<p>+1(416)-710-6857</p>
					</div>
					<div class="contact-jennifer">
						<img src=""/>
						<h2>Jennifer Morais</h2>
							<p>Founding Partner</p>
							<p>jmorais@acuitypartners.ca</p>
							<p>+1(416)-996-8737</p>
					</div>
				</div> -->
<!-- 
				<div class ="contact-email">
					<p>Stay current with our latest insights</p>

					<form method="POST" action="mailto:test.email@testmail.com">
						<input type="text" placeholder="Email Address" name="email">
						<input type="submit" value="Subscribe">
					</form>
				</div>

			</div> -->


			
			<!-- <form method="post" action="mailto:test.email@testmail.com" >

			  <input type="submit" value="Send Email" /> 
			</form>

			<?//php while ( have_posts() ) : the_post(); ?>

				<?//php get_template_part( 'template-parts/content', 'contact' ); ?>

			<?//php endwhile; // End of the loop. ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
