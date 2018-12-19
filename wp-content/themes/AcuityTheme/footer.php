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

							<a href = <?php echo home_url('/'); ?>?>
								<img class="brand-logo" src="<?php echo get_template_directory_uri().'/build/Assets/Images/Branding%20Images/AcuityLogoWhiteBGFinal.svg'?>">
							</a>
								<div class="icons">
									<a href="https://www.linkedin.com/company/acuitypartners-privatemarkets-strategicadvisor/about/" target="_blank">
										<img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Linked_In_Icon.svg'?>">
									</a>
									<a href="contact.us@acuitypartners.ca" target="_blank">
										<img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Email_Icon.svg'?>">
									</a>

								</div><!-- icons -->
						</div><!-- logos-area -->
						
						
						<div class="footer-group-area">
							<div class="footer-group company">
								<p class="footer-heading">Company</p>
								<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a>
								<a href="<?php echo esc_url( home_url( '/experience' ) ); ?>">Our Experience</a>
								<a href="<?php echo esc_url( home_url( '/approach' ) ); ?>">Our Approach</a>
								<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a>
							</div><!-- company -->

							<div class="footer-group service">
								<p class="footer-heading">Services</p>
								<a href="<?php echo esc_url( home_url( '/gp-advisory' ) ); ?>">GP Advisory</a>
								<a href="<?php echo esc_url( home_url( '/lp-advisory' ) ); ?>">LP Advisory</a>
							</div><!-- services -->

							<div class="footer-group people">
								<p class="footer-heading">People</p>
								<a href="<?php echo esc_url( home_url( '/team' ) ); ?>">Our Team</a>
								<a href="<?php echo esc_url( home_url( '/careers' ) ); ?>">Careers</a>
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
      $(document).ready(function(){

				// $("ul.nav-menu > li > a").addClass("smooth-scroll");

				if (location.hash) {
				  setTimeout(() => {
					window.scrollTo(0,0);
				  }, 1);
          var hash = location.hash;
          var offset = $(hash).offset().top;
          $('html, body').animate({
            scrollTop: offset
          }, 800, function(){
            console.log("Scrolling Smooth!");
          });
        }


				// $(".home > a").attr("href", "<?php echo esc_url( home_url( '/contact' ) ); ?>");
	
				// $("ul.nav-menu > li > a:first-child").attr("href", "#home-scroll");
				// $(".home > a").attr("href", "#home-scroll");

				// $(".home > a").on('click', function(event) {
				// 	$(".home > a").attr("href", "<?php echo esc_url( home_url( '/contact' ) ); ?>");
				// 	if (".home > a") {
				// 		$(".home > a").attr("href", "#home-scroll");
				// 		console.log("Scrolling Smooth!");
				// 	} else {

				// 	}
				// });
				// if (home_url('/') = true) {
				// 	console.log("Scrolling Smooth!");
				// } 

    		//smooth scrolling function
        // $(".smooth-scroll").on('click', function(event) {
        //   if (this.hash !=="") {
        //     event.preventDefault();
        //     var hash = this.hash;
        //     var offset = $(hash).offset().top;
        //     $('html, body').animate({
        //       scrollTop: offset
        //     }, 800, function(){
        //       console.log("Scrolling Smooth!");
        //     });
        //   }
        // });

        //hide/show back to top button
        $(window).scroll(function() {
          if ($(window).scrollTop() > 100) {
            $('.back-to-top').addClass('show');
						$('.left-block').removeClass('left-block-translate');
						$('.right-block').removeClass('right-block-translate');
						$('.center-block').removeClass('center-block-translate');
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

        //move back-to-top button at footer
				$(window).scroll(function() {
					if($(window).scrollTop() + $(window).height() >= $(document).height() - 80) {
						 $('.back-to-top').addClass('back-to-top-footer');
   				} else {
						 $('.back-to-top').removeClass('back-to-top-footer');
					 }
				});


      });// end document.ready
    </script>
		<?php wp_footer(); ?>

	</body>
</html>
