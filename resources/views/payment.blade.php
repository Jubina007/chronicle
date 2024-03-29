<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Chronicle Education Category Bootstrap Responsive website Template | Payment :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!-- shop css -->
	<link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
	<!-- easy-responsive-tabs css -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css" type="text/css" media="all" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online-fonts -->
	<!-- logo -->
	<link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<!-- titles -->
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- //online-fonts -->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	@include("theme")
		<div class="banner-bg-inner">
			<!-- banner-text -->
			<div class="banner-text-inner">
				<div class="container">
					<h2 class="title-inner">
						world of reading
					</h2>

				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
		<!-- breadcrumbs -->
		<div class="crumbs text-center">
			<div class="container">
				<div class="row">
					<ul class="btn-group btn-breadcrumb bc-list">
						<li class="btn btn1">
							<a href="index.html">
								<i class="glyphicon glyphicon-home"></i>
							</a>
						</li>
						<li class="btn btn2">
							<a href="shop.html">Product Catalogue</a>
						</li>
						<li class="btn btn3 btn3a">
							<a href="single_product.html">Single product</a>
						</li>
						<li class="btn btn4 btn4a">
							<a href="checkout.html">Checkout</a>
						</li>
						<li class="btn btn5">
							<a href="payment.html">Payment Details</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!--Payment-->
		<div class="innerf-pages section">
			<div class="container">
				<div class="privacy about">
					<h4 class="rad-txt">
						<span class="abtxt1">payment</span>
						<span class="abtext"> details</span>
					</h4>
					<!--/tabs-->
					<div class="responsive_tabs innfpage-tabs">
						<div id="horizontalTab">
							<ul class="resp-tabs-list">
								<li>Cash on delivery (COD)</li>
								<li>Credit/Debit</li>
								<li>Net Banking</li>
								<li>Paypal Account</li>
							</ul>
							<div class="resp-tabs-container">
								<!--/tab_one-->
								<div class="tab1">
									<div class="pay_info">
										<div class="vertical_post check_box_fpay">
											<h5>COD - Now Available</h5>
											<div class="checkbox">
												<div class="check_box_one cashon_delivery">
													<label class="anim">
														<input type="checkbox" class="checkbox">
														<span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
													</label>
												</div>

											</div>
										</div>
									</div>

								</div>
								<!--//tab_one-->
								<div class="tab2">
									<div class="pay_info">
										<form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
											<section class="creditly-wrapper payf_wrapper">
												<div class="credit-card-wrapper">
													<div class="first-row form-group">
														<div class="controls">
															<label class="control-label">Name on Card</label>
															<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
														</div>
														<div class="paymntf_card_number_grids">
															<div class="fpay_card_number_grid_left">
																<div class="controls">
																	<label class="control-label">Card Number</label>
																	<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
																	    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
																</div>
															</div>
															<div class="fpay_card_number_grid_right">
																<div class="controls">
																	<label class="control-label">CVV</label>
																	<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
																</div>
															</div>
															<div class="clear"> </div>
														</div>
														<div class="controls">
															<label class="control-label">Expiration Date</label>
															<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
														</div>
													</div>
													<button class="submit">
														<span>Make payment </span>
													</button>
												</div>
											</section>
										</form>

									</div>
								</div>
								<div class="tab3">

									<div class="pay_info">
										<div class="vertical_post">
											<form action="#" method="post">
												<h5>Select From Popular Banks</h5>
												<div class="swit-radio">
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio" checked="">
																<i></i>Syndicate Bank</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>Bank of Baroda</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>Canara Bank</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>ICICI Bank</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>State Bank Of India</label>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
												<h5> select other bank</h5>
												<div class="section_room_pay">
													<select class="year">
														<option value="">=== Other Banks ===</option>
														<option value="ALB-NA">Allahabad Bank NetBanking</option>
														<option value="ADB-NA">Andhra Bank</option>
														<option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
														<option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
														<option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
														<option value="BOI-NA">Bank of India NetBanking</option>
														<option value="BOM-NA">Bank of Maharashtra NetBanking</option>
														<option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
														<option value="CBI-NA">Central Bank of India</option>
														<option value="CUB-NA">City Union Bank NetBanking</option>
														<option value="CRP-NA">Corporation Bank</option>
														<option value="DBK-NA">Deutsche Bank NetBanking</option>
														<option value="DCB-NA">Development Credit Bank</option>
														<option value="DC2-NA">Development Credit Bank - Corporate</option>
														<option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
														<option value="FBK-NA">Federal Bank NetBanking</option>
														<option value="IDS-NA">Indusind Bank NetBanking</option>
														<option value="IOB-NA">Indian Overseas Bank</option>
														<option value="ING-NA">ING Vysya Bank (now Kotak)</option>
														<option value="JKB-NA">Jammu and Kashmir NetBanking</option>
														<option value="JSB-NA">Janata Sahakari Bank Limited</option>
														<option value="KBL-NA">Karnataka Bank NetBanking</option>
														<option value="KVB-NA">Karur Vysya Bank NetBanking</option>
														<option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
														<option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
														<option value="CPN-NA">PNB Corporate NetBanking</option>
														<option value="PNB-NA">PNB NetBanking</option>
														<option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option>
														<option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
														<option value="SWB-NA">Saraswat Bank NetBanking</option>
														<option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
														<option value="SBH-NA">SB Hyderabad NetBanking</option>
														<option value="SBM-NA">SB Mysore NetBanking</option>
														<option value="SBT-NA">SB Travancore NetBanking</option>
														<option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
														<option value="SIB-NA">South Indian Bank NetBanking</option>
														<option value="SBP-NA">State Bank of Patiala NetBanking</option>
														<option value="SYD-NA">Syndicate Bank NetBanking</option>
														<option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option>
														<option value="UCO-NA">UCO Bank NetBanking</option>
														<option value="UBI-NA">Union Bank NetBanking</option>
														<option value="UNI-NA">United Bank of India NetBanking</option>
														<option value="VJB-NA">Vijaya Bank NetBanking</option>
													</select>
												</div>
												<input type="submit" value="Pay now">
											</form>
										</div>
									</div>
								</div>
								<div class="tab4">
									<div class="pay_info">
										<div class="col-md-6 tab-grid">
											<p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
											<a href="#" class="btn btn-primary">Checkout via Paypal</a>
										</div>
										<div class="col-md-6">
											<form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
												<section class="creditly-wrapper payf_wrapper">
													<div class="credit-card-wrapper">
														<div class="first-row form-group">
															<div class="controls">
																<label class="control-label">Card Holder </label>
																<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
															</div>
															<div class="paymntf_card_number_grids">
																<div class="fpay_card_number_grid_left">
																	<div class="controls">
																		<label class="control-label">Card Number</label>
																		<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
																		    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
																	</div>
																</div>
																<div class="fpay_card_number_grid_right">
																	<div class="controls">
																		<label class="control-label">CVV</label>
																		<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
																	</div>
																</div>
																<div class="clear"> </div>
															</div>
															<div class="controls">
																<label class="control-label">Valid Thru</label>
																<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
															</div>
														</div>
														<input class="btn btn-primary submit" type="submit" value="Proceed Payment">
													</div>
												</section>
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--//tabs-->
				</div>

			</div>
		</div>
		<!-- //payment -->
		<!-- footer -->
		<div class="footer-bottom section">
			<div class="container">
				<!-- newsletter -->
				<div class="subscribe-main section-w3layouts text-center">
					<h4 class="rad-txt">
						<span class="abtxt1">keep yourself</span>
						<span class="abtext">updated</span>
					</h4>
					<h5>subscribe to our newsletter to stay up-to-date with our projects.</h5>
					<div class="subscribe-form">
						<form action="#" method="post" class="subscribe_form">
							<div class="email-news">
								<input type="email" placeholder="Email" required="">
							</div>
							<div class="sub-news">
								<input type="submit" value="subscribe">
							</div>
						</form>
						<div class="clearfix"> </div>
					</div>
					<p>We respect your privacy.No spam ever!</p>
				</div>
				<!-- //newsletter ends here -->
				<!-- footer grids-->
				<div class="footer-cpy">
					<!-- footer-grid1 -->
					<div class="col-md-3 col-sm-6 footer-logo">
						<h3>
							<a href="index.html">Chronicle</a>
						</h3>
						<h4>about us</h4>
						<p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
					</div>
					<!-- //footer-grid1 -->
					<!-- footer-grid2 -->
					<div class="col-md-3 col-sm-6 footer-nav text-center">
						<h4>navigation</h4>
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About us</a>
							</li>
							<li>
								<a href="shop.html">shop</a>
							</li>
							<li>
								<a href="contact.html">contact us</a>
							</li>
						</ul>
					</div>
					<!-- //footer-grid2 -->
					<!-- footer-grid3 -->
					<div class="col-md-3 col-sm-6 blog-footer">
						<h4>latest from blog</h4>
						<div class="blog1">
							<div class="col-md-3 col-sm-3 col-xs-2 bl1">
								<a href="#">
									<img src="images/b1.jpg" alt="" class="img-responsive" />
								</a>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 bl2">
								<a href="#">Dapibus Suscipit Ante Sit by instagram</a>
								<p>February 15, 2018</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="blog1">
							<div class="col-md-3 col-sm-3 col-xs-2 bl1">
								<a href="#">
									<img src="images/b2.jpg" alt="" class="img-responsive" />
								</a>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 bl2">
								<a href="#">Dapibus Suscipit Ante Sit by instagram</a>
								<p>February 20, 2018</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<!-- //footer-grid3 -->
					<!-- footer-grid4 -->
					<div class="col-md-3 col-sm-6 contact-foot text-right">
						<h4>contact us</h4>
						<ul>
							<li>
								<span class="fa fa-home"></span>
								1185 Burlington
								<br> Canada.
							</li>
							<li>
								<span class="fa fa-phone"></span>
								+12 345 678
							</li>
							<li>
								<span class="fa fa-envelope"></span>
								<a href="mailto:info@example.com">mail@chronicle.com</a>
							</li>
						</ul>
					</div>
					<!-- //footer-grid4 -->
					<div class="clearfix"></div>
				</div>
				<!-- //footer-grids -->
				<!-- footer social -->
				<div class="footer-social text-center">
					<h4>stay connected</h4>
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook icon_facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter icon_twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-dribbble icon_dribbble"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus icon_g_plus"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer social -->
			</div>
			<!-- //footer container -->
		</div>
		<!-- //footer -->
		<div class="cpy-right">
			<p>© 2018 Chronicle. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //home -->
	<!-- Common js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!--// Common js -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		chr.render();

		chr.cart.on('new_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>

	<!-- //easy-responsive-tabs -->

	<!-- credit-card -->
	<script src="js/creditly.js"></script>
	<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

	<script>
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--search jQuery-->

	<!-- Scrolling Nav JavaScript -->
	<script src="js/scrolling-nav.js"></script>
	<!-- //fixed-scroll-nav-js -->
	<!--//scripts-->
	<!-- //gallery-js  -->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
	 ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</body>

</html>