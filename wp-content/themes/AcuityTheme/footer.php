<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
      BEGINNING OF FOOTER
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
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
