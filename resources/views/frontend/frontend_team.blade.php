<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team - Company Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

          <h1 class="logo mr-auto"><a href="{{url('/')}}"><span>NorthernGreen</span> Developers</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li class="active"><a href="{{url('/')}}">Home</a></li>

              <li class="drop-down"><a href="{{url('about')}}">About</a>
                <ul>
                <li><a href="{{url('about')}}">About Us</a></li>
                  <li><a href="{{url('team')}}">Team</a></li>
                  <li><a href="{{url('testimonials')}}">Testimonials</a></li>
                  {{-- <li class="drop-down"><a href="#">Deep Drop Down</a>
                     <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li> --}}
                </ul>
              </li>

              <li><a href="{{url('services')}}">Services</a></li>
              <li><a href="{{url('team')}}">Teams</a></li>
              <li><a href="{{url('projects')}}">Projects</a></li>
              {{-- <li><a href="{{url('blog')}}">Blog</a></li> --}}
              <li><a href="{{url('contact')}}">Contact</a></li>

            </ul>
          </nav><!-- .nav-menu -->

          <div class="header-social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
          </div>

        </div>
      </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>NorthernGreen Developers Limited has a highly qualified team of professional and technical staff.
            One of the directors is a professionally qualified civil engineer who possesses several years experience in design, construction, supervision and management of building and civil engineering projects, including infrastructure works and maintenance.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Edwin Wekesa</h4>
                <span>Chief Operations Officer</span>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Stephen Ogalo </h4>
                <span>BSc. Civil Eng. G. Eng., M.I.E.K </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Samuel Cheboi</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">




          <div class="col-lg-3 col-md-6 footer-contact">
            <h3> NORTHERN GREEN DEVELOPERS LTD</h3>
            <p>
                Raphta Heights Raphta Road-Westlands <br>
                P.O. Box 51637 – 00100 Nairobi – Kenya<br>

              <strong>Phone:</strong> +254702004477 <br>
              <strong>Email:</strong> info@northerngreen.co.ke<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Distribution & transmission lines </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sewerage works </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Civil Works </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Installation and commissioning of Mechanical Services for large commercial and
                industrial works</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Water works </a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>It’s so wonderful you’ll be joining our community!
                Just enter your details in the form below and you’re all set.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>NORTHERN GREEN DEVELOPERS LTD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://zotetech.com/">Zotetech Technologies</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

   <!-- Vendor JS Files -->
   <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>
   <script src="{{asset('frontend/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
   <script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/venobox/venobox.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
   <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>

   <!-- Template Main JS File -->
   <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>
