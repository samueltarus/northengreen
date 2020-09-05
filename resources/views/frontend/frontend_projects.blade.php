<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services - Company Bootstrap Template</title>
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

  <!-- ======= Header ======= -->
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
          <h2>Services</h2>
          <ol>
          <li><a href="{{url('/')}}">Home</a></li>
            <li>Projects</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">ROADS & OTHER CIVIL WORKS</a></h4>
              <p><span>  <strong>Ministry of Roads </strong>
            </span>  <br> Upgrading to Bitumen Standards of
            Marigath-Karandi,Ol-Ngarua-MuhotetuJnct 77 & Muhotetu sipili Road-RWC
            269
        </p>
                <hr>
                <p><span> <strong> County government of Kakamega-KUSP  Projects</strong>
                    </span>
                    <br>
                     Construction of St.Peters’-Mjini Roads
                    in Mumias – 0.55km
                </p>
                <hr>
                <p><span> <strong> Greenlands Agro
                    Producers Ltd </strong>
                    </span> <br>
                    Construction of Green lands farm Roads
                    – 16Km
                </p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">COMPLETED WATER SUPPLY, BOREHOLE DRILLING, DAM CONSTSRUCTION
                & IRRIGATION WORKS</a></h4>
                    <p><span> <strong>Timau Farm </strong></span>

                    <br>
                    Installation of a drip irrigation system for
                    a maximum of 112 Hectares from 5 No.
                    Boreholes and maintenance services.
                    </p>
                    <hr>
                    <p><span> <strong>Greenlands Agro- Producers Ltd </strong></span>

                        <br>
                        Construction of Septic Tank, waste water Drainage works, Water Reticulation Networks Covering 6500 Acres of land;
                        25 km various G.I pipes sizes ranging from 50 – 150mm dia. & 4 No. Borehole Drilling and Equipping (150-230m) deep
                            at Pioneer Farm, Nanyuki and maintenance services.

                        </p>
                        <hr>
                        <p><span> <strong>Lake Victoria South Water    Services Board  </strong></span>

                            <br>
                            Drilling of 4 No Boreholes, 120m deep each Tender – Kokelo, Apondo C, Mariwa & Nyota Express CBOs.

                            </p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">COMPLETED SEWERAGE WORKS </a></h4>
                    <p><span> <strong>Mastermind Tobacco (K)  Limited
                         </strong></span>

                    <br>
                    Construction of Leaf Processing Factory, off Mombasa Rd and Construction of sewer line i.e. Pipe laying of 4km 225
                        mm dia PCC sewer reticulation to the treatment plant.
                    </p>
                    <hr>
                    <p><span> <strong>Nairobi City  Council  </strong></span>

                        <br>
                        Rehabilitation of Sewer Lines along Nairobi River: Excavation of Rocks, Pipe laying, Replacement of damaged sewer
                            pipes of DN 225 – 375mm assorted sewer pipes and manholes along Nairobi River and Gikomba and Mathare areas.


                        </p>
                        <hr>
                        <p><span> <strong>Lake Victoria  North Water   Services Board
                             </strong></span>

                            <br>
                            Construction of Bungoma Sewerage  Works. Involved Pipe laying of 11km 225mm dia and 5km 300mm dia. PCC
                            sewer reticulation in Madharau Informal Settlement.

                            </p>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">MECHANICAL COMPLETED WORKS</a></h4>
                 <p><span> <strong>Mitithiru   Company Ltd
                            </strong></span>

                        <br>Design and installation of Residential   Amboseli- Lavington Apartment- water    reticulation networks
                        </p>
                        <hr>
                        <p><span> <strong>Mastermind Tobacco (K ) Limited

                        </strong></span>

                    <br>Design and fabrication of conveyors:  Belt, slatted; Vibros; screw and  Autofeeds    reticulation networks
                    </p>
                    <hr>
                    <p><span> <strong>OZBECCO

                    </strong></span>

                <br>Design and fabrication of Water storage  steel tanks; bucket elevators; Screw   conveyors and Silos at the brewery along
                </p>
                <hr>
            </div>
          </div>





        </div>

      </div>
    </section>

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
