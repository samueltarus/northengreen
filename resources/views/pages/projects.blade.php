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
        <h2><strong>About NorthenGreen Construction Ltd</strong></h2>
        <hr>
        <h4> Northern Green  Company Limited deals in variety of Engineering works which  include but not limited to the following:
             Water works including Dams, Water reticulation and supply, Borehole Drilling, equipping and maintenance, land reclamation and Irrigation.
               Sewerage works including pipe lines, manholes and treatment systems  
                Civil Works that includes roads, bridges and building construction.  
                 Supply, installation and commissioning of high voltage electrical power systems in commercial and industrial buildings. 
                  Installation and commissioning of Mechanical Services for large commercial and industrial works such as elevated pressed steel and Plastic Tanks. 
                   Distribution & transmission lines including substations installations  
        </h4>
          </div>

          
          <hr>
          <div class="text-center">
            <h2><strong>Mission</strong></h2>
            <hr>
            <h4>We are committed to providing timely engineering solutions, high quality products and excellent professional workmanship. </h4>
           
              </div>

              <hr>
              <div class="text-center">
                <h2><strong> Our Vision</strong></h2>
                <hr>
                <h4> To be the LEADING Engineering and Construction Company offering water, civil and power engineering solutions  
                </h4>
                  </div>

                  <hr>
                  <div class="text-center">
                    <h2><strong> How We Work</strong></h2>
                    <hr>
                    <h4> To be the LEADING Engineering and Construction Company offering water, civil and power engineering solutions  
                    </h4>
                      </div>
    
                      <hr>
                      <div class="text-center">
                        <h2><strong> Safety And Health Policy</strong></h2>
                        <hr>
                        <h4> NORTHERN GREEN LTD is committed to provision of safe work conditions to our employees, contractors and the affected community by adequately controlling the safety and health risks arising from our work activities. 
                            Ensure all people who hold leadership roles in our organization are competent and accountable in matters of health and safety and demonstrate a highly visible level of commitment. 
                            Establish ,implement and review measurable health and safety objectives and targets to ensure continual improvement of our practices, procedures and performance  
                             Strive to eliminate work-related injuries and illness by identifying and controlling workplace hazards, monitoring employee health and implementing appropriate training programmes  
                             Comply with relevant health and safety  legislation ,regulation and policies in our area of operation 
                             Accurately report, record, investigate and learn from all workplace incidents and injuries
                               Make our staff aware of their individual responsibility to take reasonable care for the safety of themselves and others and co-operate with the management in matters of safety   
                        </h4>
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