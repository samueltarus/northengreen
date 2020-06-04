@extends('layouts.main')

@section('content')
<div class="container">
<main class="mt-5 pt-5">
  <div class="container">
       
       <h1 class="text-center  text-success"  ><strong> Northern Green Developers Construction Ltd</strong></h1>
      <h3 class="text-center" ><strong> Building, Construction, Civil, Renovation & Maintenance Works </strong> </h3>
      <hr>
      <h3 class="text-right" ><strong> Raphta Heights Raphta Road-Westlands</strong></h3>
        <h3 class="text-right" ><strong> P.O. Box 51637 – 00100 Nairobi – Kenya </strong></h3>
        <h3 class="text-right " ><strong> Tel: +254702004477 </strong></h3>
            <h3 class="text-right text-danger"> <strong> Email: info@northerngreen.co.ke </strong></h3>
        </strong>
    
   
    <hr>
      <!--Section: Jumbotron-->
      <section class="card wow fadeIn">

         <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('/images/contruction1.jpg')}}" 
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/images/download.jpg')}}"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/images/download.jpg')}}"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
          
          <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <hr class="my-5">

      <!--Section: Cards-->
      <section class="text-center">
          <div class="text-center">
        <h2><strong  class=" text-danger">Welcome To NorthenGreen Construction Ltd</strong></h2>
        <hr>
        <h4>NORTHERN GREEN DEVELOPERS LIMITED was incorporated in Kenya in 2015 in the business of Civil engineering fields as designers and contractors. It is registered under the Companies Act, Cap 486 of the laws of Kenya. 
            The company is currently located on Plot No. LR. 1870/IV/203 Westlands, Nairobi.  </h4>
          </div>

          
          <hr>

          <!--Grid row-->
          <div class="row mb-4 wow fadeIn">

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">

                  <!--Card-->
                  <div class="card">

                      <!--Card image-->
                      <h4 class="card-title text-info"><strong>Our Mission</strong></h4>

                      <!--Card content-->
                      <div class="card-body">
                           {{-- <h2><strong>Welcome To Northen Green Construction Ltd </strong></h2> --}}
                          <!--Title-->
                          
                          {{-- <div class="view overlay">
                            <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                            </div>
                        </div> --}}
                          <!--Text-->
                          <p class="card-text"><h4> We are committed to providing timely engineering solutions, high quality products and excellent professional workmanship</h4></p>
                          
                      </div>

                  </div>
                  <!--/.Card-->

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">

                  <!--Card-->
                  <div class="card">

                      <!--Card image-->
                      <h4 class="card-title text-danger"><strong>Our Vision</strong></h4>

                      <!--Card content-->
                      <div class="card-body">
                          <!--Title-->
{{--                           
                          <div class="view overlay">
                            <img src="https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg" class="card-img-top" alt="">
                            <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div> --}}
                          <!--Text-->
                          <p   class="card-text">  <h4> To be the LEADING Engineering and Construction Company offering water, civil and power engineering solutions.</h4></p>
                        
                      </div>

                  </div>
                  <!--/.Card-->

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">

                  <!--Card-->
                  <div class="card">

                      <!--Card image-->
                      <h4 class="card-title text-success" ><strong>Photo Gallery</strong></h4>

                      <!--Card content-->
                      {{-- <div class="card-body">
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg" class="card-img-top" alt="">
                            <a href="https://mdbootstrap.com/education/tech-marketing/web-push-introduction/" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div> --}}
                          <!--Title-->
                          
                          <!--Text-->
                          <p class="card-text"> <h4> Construction Limited has been involved in a wide variety of development projects .</h4></p>
                          
                      </div>

                  </div>
                  <!--/.Card-->

              </div>
          
              <!--Grid column-->

          </div>
          <!--Grid row-->

          

              <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Pagination-->
          <nav class="d-flex justify-content-center wow fadeIn">
              <ul class="pagination pg-blue">

                  <!--Arrow left-->
                  <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                      </a>
                  </li>

                  <li class="page-item active">
                      <a class="page-link" href="#">1
                          <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  <li class="page-item">
                  <a class="page-link" href="{{route('index')}}">2</a>
                  </li>
                  <li class="page-item">
                  <a class="page-link" href="{{route('services')}}">3</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="{{route('teams')}}">4</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="{{route('about')}}">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="{{route('jobs')}}">5</a>
                </li>

                  <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                      </a>
                  </li>
              </ul>
          </nav>
          <!--Pagination-->

      </section>
      <!--Section: Cards-->

  </div>
</main>
</div>

@endsection