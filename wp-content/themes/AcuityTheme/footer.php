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
									<img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Linked_In_Icon.svg'?>">
									<img src="<?php echo get_template_directory_uri().'/build/Assets/Images/Hi%20Fi%20Icons%20Compressed/Email_Icon.svg'?>">

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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../wp-content/themes/AcuityTheme/js/jquery-collision.min.js"></script>
		
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


				// let backToTopPosition = $(".back-to-top").offset().top + $(".back-to-top").height();
				// let footerPosition = $(".footer-group-area").offset().top;
				// let windowPos1 = $(window).scrollTop() - 75;
				// let windowPosition =  ;
				// var backToTopPosition = $(".back-to-top").offset().top;

				// - $(window).height()
				// var position = $(".back-to-top").offset().top;
				// var backToTopPosition = $(".back-to-top").position().top;
				// $(window).scrollTop();	

				// console.log($(window).scrollTop() - $(window).height());

				// function backToTopCollision() {
				// 	if (windowPosition < footerPosition) {
				// 		console.log( 'colliding' );
				// 	} else {
        //     console.log( "not colliding" );
				// 	}
				// }
				// backToTopCollision();
	

				var colliders_selector = $(".site-footer");
				var obstacles_selector = $(".back-to-top");
				var collision = $(colliders_selector).collision(obstacles_selector);
				var footerTop = colliders_selector[0].getBoundingClientRect().top;
				// $(window).scroll(function() {
			  //   // if (windowPosition > footerPosition) {
				// 	// 	// console.log( 'colliding' );
				// 		// console.log(backToTopPosition);
				// 		//console.log(windowPos1);
				// 		footerTop = colliders_selector[0].getBoundingClientRect().bottom;	
				// 		console.log(`Footer Top: ${footerTop}`);
				// 		if (footerTop < 700) {
				// 			$(".back-to-top").addClass('bunnies');
				// 		} else {
				// 			$(".back-to-top").removeClass('bunnies');
				// 		}
				// 		console.log(`Button Top: ${obstacles_selector[0].getBoundingClientRect().top}`);
				// 	// 	// console.log(footerPosition);
				// 	// }  else {
				// 	//   console.log( "not colliding" );
					
				// 	// }
				// 	// if (collision = true) {
				// 	// 		console.log( 'colliding' );
				// 	// 		}
				// }); 
				$(window).scroll(function() {
					console.log(`Window Scroll Top ${$(window).scrollTop() + $(window).height()}, Document Height ${$(document).height() - 100}`); 
					
					if($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
						 $('.back-to-top').addClass('bunnies');
   				} else {
						 $('.back-to-top').removeClass('bunnies');
					 }
				});

        //hide/show back to top button
        $(window).scroll(function() {
          if ($(window).scrollTop() > 100) {
            $('.back-to-top').addClass('show');
            // console.log('Adding Class!');
						// $('.approach-block-container').css('overflow', 'none');
						$('.left-block').removeClass('left-block-translate');
						$('.right-block').removeClass('right-block-translate');
						$('.center-block').removeClass('center-block-translate');
						// console.log('Removing Class!');
						// console.log(backToTopPosition);
						// console.log($(window).scrollTop());
						// console.log($(window).scrollTop() + $(window).height());

						// console.log(footerPosition);
						// console.log($(".back-to-top").offset().top + $(".back-to-top").height());
						// console.log($(window).height() - $(".footer-group-area").height());
					} 
					// else if (windowPosition < footerPosition) {
					// 	console.log( 'colliding' );
					// } 
					else {
            $('.back-to-top').removeClass('show');
					}
				
				//HAVE TRIED THESE BELOW vv
				//$(".back-to-top").offset().top - $(".back-to-top").height() > $(".footer-group-area").offset().top + $(".footer-group-area").height() 
				// $(".back-to-top").position().bottom < $(".footer-group-are").position().top
				// $(".back-to-top").offset().top > $(".footer-group-area").offset().top

				//this is a collision plugin => $('.back-to-top').collision('.footer-group-area')

				// setInterval(function(){
				// 	$(".back-to-top");`
				// 	$(".footer-group-area");
				// }, 1000);
				});

				// $(function() {
				// 			var colliders_selector = $(".site-footer");
				// 			var obstacles_selector = $(".back-to-top");
				// 			if ($(colliders_selector).collision(obstacles_selector)) {
				// 			console.log( 'colliding' );
				// 			}
				// 		});

				
				// var footer_collision = $(colliders_selector).collision(obstacles_selector)

				
				

				// function collision((".back-to-top"), (".footer-group-area")) {
				//   var x1 = (".back-to-top").offset().left;
				//   var y1 = (".back-to-top").offset().top;
				//   var h1 = (".back-to-top").outerHeight(true);
				//   var w1 = (".back-to-top").outerWidth(true);
				//   var b1 = y1 + h1;
				//   var r1 = x1 + w1;
				//   var x2 = (".footer-group-area").offset().left;
				//   var y2 = (".footer-group-area").offset().top;
				//   var h2 = (".footer-group-area").outerHeight(true);
				//   var w2 = (".footer-group-area").outerWidth(true);
				//   var b2 = y2 + h2;
				//   var r2 = x2 + w2;

				//   if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) return false;
				//   return true;
				// }

				// function collision();


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
		<?php wp_footer(); ?>

	</body>
</html>
