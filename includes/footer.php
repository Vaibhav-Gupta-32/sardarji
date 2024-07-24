<!--================Footer Area =================-->

	<!--End of Tawk.to Script-->
	<footer class="footer_area yellow_footer">
		<div class="footer_widgets">
			<div class="container">
				<div class="row f_widgets_inner">
					<div class="col-lg-3 col-sm-6">
						<aside class="f_widget about_widget wow animated fadeInUp" data-wow-delay="0.2s">
							<a class="f_logo" href="index-3.html"><img src="img/sardarjilogo.png" srcset="img/sardarjilogo.png" alt="Sardarji Tour and travels Taxi Service"></a>
							<p><i class="icon-map_marker_2" aria-hidden="true"></i>Address 1: Dharampura no. 2 jagdalpur </p>
							<p><i class="icon-map_marker_2" aria-hidden="true"></i>Address 2: Deopuri Front of Kamal vihar Raipur</p>
							<a href="mailto:booking@Sardarjitourandtravels.com">
								<i class="icon-envelop_2" aria-hidden="true"></i>sardarjionewaytaxi@gmail.com</a>
							<a href="tel:+918319790050">
								<i class="icon-phone_2" aria-hidden="true"></i>+91-8319790050</a>
						</aside>
					</div>
					<div class="col-lg-3 col-sm-6">
						<aside class="f_widget link_widget wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="f_title">
								<h3>Quick Link</h3>
							</div>
							<ul class="nav flex-column">
								<li><a href="#">Home</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Contact us</a></li>

							</ul>
						</aside>
					</div>
					<div class="col-lg-3 col-sm-6">
						<aside class="f_widget link_widget wow animated fadeInUp" data-wow-delay="0.6s">
							<div class="f_title">
								<h3> Taxi Service</h3>
							</div>
							<ul class="nav flex-column">
								<ul class="nav flex-column">
									<li><a href="#"> Outstation-RoundTrip</a></li>
									<li><a href="#">Outstation-Oneway</a></li>
									<li><a href="#">Local-FullDay</a></li>


								</ul>
						</aside>
					</div>

					<div class="col-lg-3 col-sm-6">
						<aside class="f_widget link_widget wow animated fadeInUp" data-wow-delay="0.6s">
							<div class="f_title">
								<h3>Taxi Service In Chhattisgarh</h3>
							</div>
							<ul class="nav flex-column">
								<li><a href="#"> Raipur</a></li>
								<li><a href="#">Bilaspur</a></li>
								<li><a href="#">Jagdalpur</a></li>
								<li><a href="#">Raigarh & More Cities</a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>

		<div class="footer_copyright">
			<div class="container">
				<div class="copyright_inner d-flex justify-content-between">
					<div class="left">
						<p>Copyright @ 2024 Sardarji One Way Taxi Services All Rights Reserved. |
						</p>
					</div>
					<div class="right">
						<ul class="nav">
							<li>Designed By<a href="https://cbktechnologies.com" target="_blank"> CBK Technologies Pvt
									Ltd </a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->



	<!--================End Search Box Area =================-->

	<div class="row d-flex" style=" position: fixed; bottom: 0px; width: 100%;z-index:999999; left: 0px; margin: 50px 0 0 0px;">

		<div class="col-lg-4" style="background:blue;">
			<a href="https://api.whatsapp.com/send?text=https://sardarjionewaytaxi.in/" data-action="share/whatsapp/share" target="_blank" class="btn-sonar" style="background:blue; height: 52px; padding-top: 5px; color: #fff; width: 100%;">
				<img src="img/share-icon.png"> Share
			</a>
		</div>
		<div class="col-lg-4 pull-right" style="background:#4ac759;">
			<a href="https://api.whatsapp.com/send?phone=918319790050&amp;text" class="btn-sonar" style="height: 52px; padding-top: 5px; width: 100%;" target="_blank">
				<img src="img/whatsapp-icon.png"> Whatsapp
			</a>
		</div>
		<div class="col-lg-4" style="background:blue;">
			<a href="tel:918319790050" target="_blank" class="btn-sonar" style=" background:blue; height: 52px; padding-top: 5px; color: #fff; width: 100%;">
				<img src="img/call-icon.png"> Call Now
			</a>
		</div>

	</div>
	<script type="text/javascript">
		$(function() {
			$('#datetimepicker1').datetimepicker();
		});
	</script>


	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5JPTS7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="resources/demos/style.html">

	<script>
		$(function() {
			var dateFormat = "mm/dd/yy",
				from = $("#from")
				.datepicker({
					defaultDate: "+1",
					changeMonth: true,
					numberOfMonths: 1
				})
				.on("change", function() {
					to.datepicker("option", "minDate", getDate(this));
				}),
				to = $("#to").datepicker({
					defaultDate: "+1",
					changeMonth: true,
					numberOfMonths: 1
				})
				.on("change", function() {
					from.datepicker("option", "maxDate", getDate(this));
				});

			function getDate(element) {
				var date;
				try {
					date = $.datepicker.parseDate(dateFormat, element.value);
				} catch (error) {
					date = null;
				}

				return date;
			}
		});
	</script>

	<!-- Optional JavaScript -->

	<script src="js/popper.min.js"></script>
	<!-- Extra Plugin js -->
	<script src="vendors/datetimepicker/moment.js"></script>
	<script src="vendors/datetimepicker/tempusdominus-bootstrap-4.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="vendors/slick/slick.min.js"></script>
	<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
	<script src="vendors/animate-css/wow.min.js"></script>

	<script src="js/theme-dist.js"></script>



</body>


<!-- Mirrored from www.Sardarjitourandtravels.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2024 16:14:49 GMT -->

</html>