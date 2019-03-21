<footer class="site-footer blue-bg">
	<div class="thm-container">
		<div class="row masonary-layout">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>About</h3>
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Our Team</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Latest News</a></li>
						<li><a href="#">Free Consultancy</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>Bitcoin</h3>
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="#">Get Started</a></li>
						<li><a href="#">Wallets</a></li>
						<li><a href="#">Buy & Sell Bitcoins</a></li>
						<li><a href="#">Exchange Market</a></li>
						<li><a href="#">Daily Stats</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>Legal</h3>
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="#">Guide</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-footer-widget">
					<div class="title">
						<h3>Subscribe</h3>
					</div><!-- /.title -->
					<form action="inc/mailchimp/subscribe.php" class="subscribe-form">
						<input type="text" placeholder="Email Address" />
						<button type="submit" class="fa fa-check"></button>
					</form><!-- /.subscribe-form -->
				</div><!-- /.single-footer-widget -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</footer><!-- /.site-footer -->

<div class="footer-bottom blue-bg">
	<div class="thm-container clearfix">
		<div class="pull-left copy-text">
			<p>&copy; 2018 Bitcoin.com All copy rights are reserved.</p>
		</div><!-- /.pull-left copy-text -->
		<div class="social pull-right">
        	<a href="#" class="fa fa-twitter"></a><!--
        	--><a href="#" class="fa fa-facebook"></a><!--
        	--><a href="#" class="fa fa-youtube-play"></a><!--
        	--><a href="#" class="fa fa-pinterest"></a>
        </div><!-- /.social -->
	</div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="bitmex-icon-search"></i></button>
            </span>
        </div>
    </div>
</div>


<section class="hidden-sidebar side-navigation">
    <a href="#" class="close-button side-navigation-close-btn fa fa-times"></a><!-- /.close-button -->
    <div class="sidebar-content">
        <h3>Crypto Bitcoin <br /> Currency <br /> Html Template</h3> 
        <p>Lorem ipsum dolor sit amet adipiscing elitn quis ex et mauris vulputate semper Etiam eget lacus dapibs ultricies diam vel sollicitudin.</p>
        <p class="contact-info">Inquiry@bitcoin.com <br /> 2800 256 508</p><!-- /.contact-info -->
        <div class="social">
        	<a href="#" class="fa fa-twitter"></a><!--
        	--><a href="#" class="fa fa-facebook"></a><!--
        	--><a href="#" class="fa fa-youtube-play"></a><!--
        	--><a href="#" class="fa fa-pinterest"></a>
        </div><!-- /.social -->
    </div><!-- /.sidebar-content -->
</section><!-- /.hidden-sidebar -->


<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>                    

<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/custom.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</body>
</html>