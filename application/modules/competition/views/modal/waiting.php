<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Login Process |</title>
<meta name="description" content>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url()?>assets/css/signatra-font.css">
<link rel="icon" type="image/png" href="<?= base_url()?>favicon.html">

<link rel="apple-touch-icon" href="<?= base_url()?>apple-touch-icon.html">
<link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/iconfont.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/swiper.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/rev-settings.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/plugins.css" />

<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css" />
</head>
</head>

<body>
<section class="xs-section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="about-slider-wraper">
						<div class="about-slider owl-carousel">
							<div class="single-slider">
								<img src="<?= base_url()?>assets/images/about-slider/about-slider1.png" alt>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 align-self-center">
					<div class="about-summary-content">
						<i class="icon icon-agenda gradient-icon"></i>
						<h2 class="section-title">We’re <span class="gradient-title"><em>Agencify</em></span></h2>
						<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
							ocean. A small river named Duden flows by their place and supplies it with the necessary
							regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
							mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost
							unorthographic life</p>
						<div class="btn-wraper">
							<a href="#" class="btn btn-primary btn-gradient3">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  <script>
    // Setup End Date for Countdown (getTime == Time in Milleseconds)
    let launchDate = new Date("mar 1, 2024 12:00:00").getTime();

    // Setup Timer to tick every 1 second
    let timer = setInterval(tick, 1000);

    function tick() {
      // Get current time
      let now = new Date().getTime();
      // Get the difference in time to get time left until reaches 0
      let t = launchDate - now;

      // Check if time is above 0
      if (t > 0) {
        // Setup Days, hours, seconds and minutes
        // Algorithm to calculate days...
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        // prefix any number below 10 with a "0" E.g. 1 = 01
        if (days < 10) { days = "0" + days; }

        // Algorithm to calculate hours
        let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        if (hours < 10) { hours = "0" + hours; }

        // Algorithm to calculate minutes
        let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        if (mins < 10) { mins = "0" + mins; }

        // Algorithm to calc seconds
        let secs = Math.floor((t % (1000 * 60)) / 1000);
        if (secs < 10) { secs = "0" + secs; }

        // Create Time String
        let time = `${days} : ${hours} : ${mins} : ${secs}`;

        // Set time on document
        document.querySelector('.countdown').innerText = time;
      }
    }
    </script>
    <script data-cfasync="false" src="<?= base_url()?>../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins.js"></script>
<script src="<?= base_url()?>assets/js/Popper.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/scrollax.js"></script>
<script src="<?= base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url()?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/js/swiper.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
<script src="<?= base_url()?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?= base_url()?>assets/js/delighters.js"></script>
<script src="<?= base_url()?>assets/js/typed.js"></script>
<script src="<?= base_url()?>assets/js/jquery.parallax.js"></script>
<script src="<?= base_url()?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url()?>assets/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?= base_url()?>assets/js/skrollr.min.js"></script>
<script src="<?= base_url()?>assets/js/shuffle-letters.js"></script>
<script src="<?= base_url()?>assets/js/main.js"></script>
</body>

</html>