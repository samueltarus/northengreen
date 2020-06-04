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
        <h2><strong> Completed Sewage Works </strong></h2>
        <hr>
        <h3>Client</h3>
        <h4>Mastermind Tobacco (K) Limited</h4>
        <h3>Project</h3>
        <h4>ewer line i.e.  Pipe laying of 4km 225 mm dia PCC sewer reticulation to the treatment plant. 

        </h4>
          </div>
           <hr>
          <div >
            <h2><strong>Client</strong></h2>
            <h4>Nairobi City Council </h4>
            <hr>
            <h3>Project</h3>
            <h4>Rehabilitation of Sewer Lines along Nairobi River: Excavation of Rocks, Pipe laying, Replacement of damaged sewer pipes of DN 225 – 375mm assorted sewer pipes and manholes along Nairobi River and Gikomba and Mathare areas.    </h4>
              </div>
              <hr>
              <div >
                <h2><strong>Client</strong></h2>
                <h4>Lake Victoria North Water Services Board</h4>
                <hr>
                <h3>Project</h3>
                <h4>Construction of Bungoma Sewerage Works. Involved Pipe laying of 11km 225mm dia and 5km 300mm dia. PCC sewer reticulation in Madharau Informal Settlement  </h4>
                  </div>
                  <hr>
              <div >
                <h2><strong>Client</strong></h2>
                <h4>Zanzibar Water Authority </h4>
                <hr>
                <h3>Project</h3>
                <h4>Construction of sewerage system and treatment plant. The sewerage works include; Laying of Concrete Pipes: DN 450mm PCC-Pipe 1540m,  ,DN 225mm Artery of 2.5 km, DN 600mm PCC-Pipe 940m,steel pipe 450mm diameter ,450m and uPVC 160-22mm diameter 4.5kmManholes Size: Ring Manholes 900mm Diameter, Cast Insitu Manholes Size 1050, 1200, 1500 mm Diameter.
                      </h4>
                  </div>
                  <hr>
                  <div >
                    <h2><strong>Client</strong></h2>
                    <h4> Mitithiru Company Ltd</h4>
                    <hr>
                    <h3>Project</h3>
                    <h4>Relocation of the existing DN 450mm PCC Pipe 950m Sewer and Construction of DN 300mm Artery of 1 km New Sewer Line at Ofafa Maringo, Nairobi.  </h4>
                      </div>
              <hr>
           

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