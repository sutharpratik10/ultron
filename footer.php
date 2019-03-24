		<div class="footer-top blue-bg">
			<div class="thm-container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="single-footer-top">
							<p><i class="bitmex-icon-envelope"></i><span>Email: </span>inquiry@bitcoin.com</p>
						</div><!-- /.single-footer-top -->
					</div><!-- /.col-md-4 -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="single-footer-top">
							<p><i class="bitmex-icon-phone-call"></i><span>Call: </span>2800 256 508</p>
						</div><!-- /.single-footer-top -->
					</div><!-- /.col-md-4 -->
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="single-footer-top">
							<p><i class="bitmex-icon-placeholder"></i><span>Address: </span>Suite 20 Bitcoin Street West USA</p>
						</div><!-- /.single-footer-top -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.thm-container -->
		</div><!-- /.footer-top -->

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
		<script src="js/Chart.min.js"></script>
		<script src="js/chart-config.js"></script>
		<script src="js/custom.js"></script>
		<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

		<script>
			const url = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,DASH,BCH,XRP,TRX,XMR&tsyms=BTC,USD,EUR&api_key=INSERT-YOUR-API-KEY-HERE";
				const vm = new Vue({
						el: '#app',
						data: {
						results: []
						},
						mounted() {
						axios.get(url).then(response => {
							this.results = response.data
						})
						}
					});
		</script>
	</body>
</html>