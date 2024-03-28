<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Multipurpose - Agecny Blog Block</title>
  <meta name="description" content>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/css/signatra-font.css">
  <link rel="icon" type="image/png" href="favicon.html">

  <link rel="apple-touch-icon" href="apple-touch-icon.html">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/iconfont.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/swiper.min.css">
  <link rel="stylesheet" href="assets/css/rev-settings.css">

  <link rel="stylesheet" href="assets/css/plugins.css" />

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <style>
    body {
      font-family: "Courier New", Courier, monospace;
    }
  </style>
</head>

<body>
  <section class="xs-section-padding portfolio-blog-area" id="portfolio-blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="agency-section-title style7 text-center">
            <h2 class="sub-title">LEAVE A MASSAGE</h2>
            <h3 class="main-title">The Page Is Under</h3>
            <div class="shuffle-letter-title-wraper">
              <h4 class="shuufle-letter-title">CONSTRUCTION</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-block-post radius box-shadow xs-mb-3">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a href="blog-single-sidebar.html" class="entry-thumb">
              <img src="assets/images/construction_img.gif" alt>
            </a>
            <br>
            <h5 class="widget-title">Notify Me :</h5>
            <form action="#" class="newsletter-form subscribe-form" method="POST">
              <input type="email" name="email" id="sub-input-one" placeholder="Your WhatsApp Number" class="form-control">
              <label for="sub-input-one"></label>
              <button type="submit" class="send-button"><i class="icon icon-paper-plane"></i></button>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="btn-wraper text-center">
              <a href="blog-grid.html" class="btn btn-primary btn-gradient3 icon-righ">Go Back Home</a>
            </div>
            <div class="post-body">
              <div class="entry-header">
                <div class="">
                  <span><strong> Day : Hour : Min : Sec</strong></span>

                </div>
                <div class="post-meta-list meta-style2">
                <strong> <span class="countdown"><i class="icon icon-calendar"></i> 00 : 00 : 00 : 00</span></strong>
                </div>
                <h class="entry-title"><a><b>Hi !!</b><br> Competition Starting Soon..</a>
                </h>
              </div>
              <div class="post-footer">
                <p class="Courier New">Please be patient while we finishing last tests and stay in touch with our <a
                    href="#" target="_self" class="twitter_link"><strong>twitter</strong></a> or <a href="#"
                    target="_self" class="facebook_link"><strong>facebook</strong></a> profiles.</p>
              </div>
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
  <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/Popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/scrollax.js"></script>
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
  <script src="assets/js/jquery.easypiechart.min.js"></script>
  <script src="assets/js/delighters.js"></script>
  <script src="assets/js/typed.js"></script>
  <script src="assets/js/jquery.parallax.js"></script>
  <script src="assets/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.video.min.js"></script>
  <script src="assets/js/skrollr.min.js"></script>
  <script src="assets/js/shuffle-letters.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>