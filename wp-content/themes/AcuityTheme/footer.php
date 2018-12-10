<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						
						<div class="logos-area">
								<img class="brand-logo" src="wp-content/themes/AcuityTheme/build/Assets/Images/Branding%20Images/AcuityLogoWhiteBGFinal.svg">
								<div class="icons">
									<img src="wp-content/themes/AcuityTheme/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Linked_In_Icon.svg">
									<img src="wp-content/themes/AcuityTheme/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Email_Icon.svg">
								</div><!-- icons -->
						</div><!-- logos-area -->
						
						<div class="footer-group-area">
							<div class="footer-group company">
								<p class="footer-heading">Company</p>
								<a href="#">About Us</a>
								<a href="#">Our Experience</a>
								<a href="#">Our Approach</a>
								<a href="#">Contact Us</a>
							</div><!-- company -->

							<div class="footer-group service">
								<p class="footer-heading">Services</p>
								<a href="#">GP Advisory</a>
								<a href="#">LP Advisory</a>
							</div><!-- services -->

							<div class="footer-group people">
								<p class="footer-heading">People</p>
								<a href="#">Our Team</a>
								<a href="#">Careers</a>
							</div><!-- people -->
						</div><!-- footer-group-area -->
						
						
						<!-- font test -->
						<!-- <div>
							<p class="reg">Regular</p>
							<p class="light">Light</p>
							<p class="medium">Medium</p>
							<p class="bold">Bold</p>

						</div>	 -->
						
						<div class="foot-foot">
							<p class="privacy">Privacy Policy</p>
							<p>Copyright <i class="far fa-copyright"></i> 2018</p>					
						</div><!-- foot-foot -->

					</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>console.log("we have jquery");</script>
		<script>
      $(document).ready(function(){


    		//smooth scrolling function
        $(".smooth-scroll").on('click', function(event) {
          if (this.hash !=="") {
            event.preventDefault();
            var hash = this.hash;
            var offset = $(hash).offset().top;
            $('html, body').animate({
              scrollTop: offset
            }, 800, function(){
              console.log("Scrolling Smooth!");
            });
          }
        });


        //hide/show back to top button
        $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
            $('.back-to-top').addClass('show');
            console.log('Adding Class!');
          } else {
            $('.back-to-top').removeClass('show');
          }
        });
        //back to top button function
        $('.back-to-top').on('click', function(e) {
          console.log('Back To Top!');
          e.preventDefault();
          $('html, body').animate({
            scrollTop:0
          }, '300');
        });


      });// end document.ready
    </script>

	</body>
</html>
