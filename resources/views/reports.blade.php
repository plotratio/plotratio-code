<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Reports</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  /* reportListButton */
    .reportListButton{
      width:100%!important;
      height: 4rem;

      padding: 0px 9px!important;
      background-color: #FFFFFF;
      color: #000000;
      font-size: 12px!important;
      text-align: left!important;
      border: 0px;
    }
    .marginRowClass{
      margin-bottom:1%!important;
      margin-top:1%!important;
      margin-right:3%!important;
    }
    .marginRowClass > .btn-group{
      border-radius: 5px;
      border: 2px solid black;
      padding:0px;
    }
    .reportListButton:hover{
      background-color: #b02e0c!important;
      color:#FFFFFF!important;
    }
    .header,.navbar a,.header.header-scrolled{
      background-color: #b02e0c;
      color:#FFFFFF!important;
    }
    [data-aos][data-aos][data-aos-duration="1000"], body[data-aos-duration="1000"] [data-aos]  {
        transition-duration: 500ms!important;
      }

      @media (max-width: 577px) {
        .reportListButton {
          height: 3.18rem;
        }
        .btn-group >span img{
          width: 76px;
          height: 144px;
        }
        .mySpanPaddingClass {
          padding: 1% 3%!important;
        }
      }
      @media (max-width: 770px) {
        .reportListButton {
          height: 7rem;
          padding: 0px 5px;
        }
        .btn-group >span img{
          width: 35px;
          height: 93px;
        }
        .mySpanPaddingClass{
          padding: 8% 3%;
          background-color: #b02e0c;
        }
      }
      @media (min-width: 771px) {
        .reportListButton {
          height: 4.1rem;
          padding: 0px 9px;
        }
        .btn-group >span img{
          width: 35px;
          height: 45px;
        }
        .mySpanPaddingClass{
          padding: 4% 3%!important;
          background-color: #b02e0c;
        }
      }
      .btn-group >span img{
        /* width: 60px;
        height: 64px; */
      }

      .marginRowClass > .btn img {
        display: inline-block;
        vertical-align: middle;
        background: #f00;
        padding: 5px;
        border-radius: 5px;

    }
      .marginRowClass > .btn {
        border: 1px solid black!important;

    }
    .mySpanPaddingClass{
      padding: 8% 3%;
      background-color: #b02e0c;
    }

    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpeg" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto" href="/">Home</a></li> -->
          <li><a class="nav-link scrollto active" href="{{ route('/') }}">Reports</a></li>
          <li><a class="nav-link scrollto" href="{{ url('report-list/button-1') }}">Report Detail</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">RED Paper</a></li>
          <li><a class="nav-link scrollto" href="#team">ReFX</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Reports</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs --> -->

    <!-- ======= Portfolio Section ======= -->

    <div class="container">
    <div class="row">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row col-sm-12 col-md-12 col-lg-12 marginRowClass">
           <div class="col-sm-1 col-md-1 col-lg-1"></div>
              <div class="col-sm-3 col-md-3 col-lg-3 marginRowClass btn-group">

                  <span class="mySpanPaddingClass">
                    <img src="assets/img/icons/logo1.png" alt="Avatar" class="image" >
                  </span>
                  <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-1") }}'">
                    <span>Top 10 Massive Condos By Number Of Units</span>
                  </button>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 marginRowClass btn-group">
                <span class="mySpanPaddingClass">
                  <img src="assets/img/logo.png" alt="Avatar" class="image" >
                </span>
                <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-2") }}'">
                  <span>Top 10 Smallest Condos By Land Size</span>
                </button>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 marginRowClass btn-group">
              <span class="mySpanPaddingClass">
                <img src="assets/img/logo.png" alt="Avatar" class="image" >
              </span>
              <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-3") }}'">
                <span>Top 10 Massive Condos By Land Size</span>
              </button>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
          </div>
          <div class="row col-sm-12 col-md-12 col-lg-12 marginRowClass">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
              <div class="col-sm-3 col-md-3 col-lg-3 marginRowClass btn-group">
                <span class="mySpanPaddingClass">
                  <img src="assets/img/logo.png" alt="Avatar" class="image" >
                </span>
                <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-3") }}'">
                  <span>Top 10 Latest Condos</span>
                </button>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 marginRowClass btn-group">
                <span class="mySpanPaddingClass">
                  <img src="assets/img/logo.png" alt="Avatar" class="image" >
                </span>
                <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-5") }}'">
                  <span>Top 10 Oldest Condos</span>
                </button>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 marginRowClass btn-group">
              <span class="mySpanPaddingClass">
                <img src="assets/img/logo.png" alt="Avatar" class="image" >
              </span >
              <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-6") }}'">
                <span>Top 10 Smallest Condos By Number Of Units</span>
              </button>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
          </div>
      </section><!-- End About Section -->

  </div>



</div>
<!-- /.container -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.jpeg" alt="">
              <!-- <span>FlexStart</span> -->
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
