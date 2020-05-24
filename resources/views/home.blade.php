@extends('layouts.main')

@section('content')
<div class="container">
<main class="mt-5 pt-5">
  <div class=".container-fluid">
      
    <h2 class="text-center">Welcome To NorthenGreen Construction Ltd</h2>
    <hr>
      <!--Section: Jumbotron-->
      <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

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
        <h2>Welcome To NorthenGreen Construction Ltd</h2>
        <hr>
        <h4>NorthenGreen Construction Limited has played a pivotal role in the development of infrastructure projects in Kenya.
           We pride ourselves in being the leading indigenous construction company in Kenya, from humble beginnings in 2010. 
           We are located in Westlands, on Rapta heights Road </h4>
          </div>

          
          <hr>

          <!--Grid row-->
          <div class="row mb-4 wow fadeIn">

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">

                  <!--Card-->
                  <div class="card">

                      <!--Card image-->
                      <h4 class="card-title">Our Mission</h4>

                      <!--Card content-->
                      <div class="card-body">
                          <!--Title-->
                          
                          <div class="view overlay">
                            <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                            </div>
                        </div>
                          <!--Text-->
                          <p class="card-text"><h4> To provide excellent services to the people of Kenya, 
                              by offering professional expertise using state of the art tools and technology in computer hardware and software.
                            The mission reflects our goals, ethics and attitudes towards our work. 
                            Innovation is key in dealing with the unique challenges of every project we undertake.</h4></p>
                          
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
                      <h4 class="card-title">Our Vision</h4>

                      <!--Card content-->
                      <div class="card-body">
                          <!--Title-->
                          
                          <div class="view overlay">
                            <img src="https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg" class="card-img-top" alt="">
                            <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                          <!--Text-->
                          <p   class="card-text">  <h4> To be the most respected Construction Company in Kenya.
                            We place great value on innovation and professionalism in everything we do. 
                            These qualities have proved paramount in our endeavour to be the Company of choice in infrastructure development in Kenya.</h4></p>
                          <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank" class="btn btn-primary btn-md">Start tutorial
                              <i class="fas fa-play ml-2"></i>
                          </a>
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
                      <h4 class="card-title">Photo Gallery</h4>

                      <!--Card content-->
                      <div class="card-body">
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg" class="card-img-top" alt="">
                            <a href="https://mdbootstrap.com/education/tech-marketing/web-push-introduction/" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                          <!--Title-->
                          
                          <!--Text-->
                          <p class="card-text"> <h4> Construction Limited has been involved in a wide variety of development projects .</h4></p>
                          <a href="https://mdbootstrap.com/education/tech-marketing/web-push-introduction/" target="_blank" class="btn btn-primary btn-md">Start tutorial
                              <i class="fas fa-play ml-2"></i>
                          </a>
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
                      <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">5</a>
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