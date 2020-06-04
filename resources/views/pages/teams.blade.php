@extends('layouts.main')

@section('content')
<div class="container">
<main class="mt-5 pt-5">
  <div class=".container-fluid">
       
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
      <section >
          <div >
        <h2><strong>Our Team</strong></h2>
        <hr>
        <h4>NORTHERN GREEN DEVELOPERS Limited has a highly qualified team of professional and technical staff..
          The technical team is led by<strong> Eng. Stephen Ogallo  B.Sc. (Civil) R. Eng, </strong> who is the Senior Projects Engineer, supported by a core team of both local and expatriate engineers. 
           Heading the staff is <strong> Stephen Ogallo B.Sc. (Civil) R. Eng.</strong> a team of 25 highly experienced Engineering professionals who can handle any construction/erection, testing and commissioning of any project.
           . Northern Green Developers Company limited boasts of a critical mass of experienced staff that has the necessary expertise
        </h4>
          </div>

          
          <hr>
          <div >
            <h2><strong>Key Experince</strong></h2>
            <hr>
            <h4>We are committed to providing timely engineering solutions, high quality products and excellent professional workmanship. </h4>
           
              </div>

              <hr>
              


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