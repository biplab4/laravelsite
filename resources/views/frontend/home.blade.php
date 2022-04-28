@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-2">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style="max-width:1920px; max-height:650px !important;">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/b2.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/b1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50" src="images/b2.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    <div style="background-image: url('images/texture.jpg')" class="py-5">
        <div class="container">
            <h1 class="text-center text-primary font-weight-bold">Welcome to Hotel Shrestha Residency</h1>
            <p class=" pt-5 pb-5">
                Lorem , dolor sit amet consectetur adipisicing elit. Corporis sed quia neque ssaepe id
                volsuptatibusjjaliquid iusto consequuntur
                ipsum, dolor sit amet consectetur adipisicing elit ipsum, dolor sit amet consectetur adipisicing elit.
                Corporis sed quia neque ssaepe id volsuptatibusjjaliquid iusto consequuntur
                Lorem , dolor sit amet consectetur adipisicing elit Lorem , dolor sit amet consectetur adipisicing elit.
                Corporis sed quia neque ssaepe id volsuptatibusjjaliquid iusto consequuntur
                ipsum, dolor sit amet consectetur adipisicing elit Lorem , dolor sit amet consectetur adipisicing elit.
                Corporis sed quia neque ssaepe id volsuptatibusjjaliquid iusto consequuntur
                ipsum, dolor sit amet consectetur adipisicing elit </p>
        </div>
    </div>
    <hr style="margin: 0px ">
    <div class="container">
        <h1 class="text-center text-warning text-uppercase font-weight-bold text-monospace pt-4">Our Services</h1><br>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('service') }}" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%">
                        <div class="caption ">
                            <h4 class="text-primary font-weight-bold">Multi-cuisine Restaurant</h4>
                            <button type="submit" class="btn btn-success">Read more</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('service') }}" style="text-decoration: none">
                        <img src="images/b2.png" alt="Nature" style="width:100%">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Super Standard Bar</h4>
                            <button type="submit" class="btn btn-success">Read more</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('service') }}" style="text-decoration: none">
                        <img src="images/b1.png" alt="Fjords" style="width:100%">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Well Equipped Banquet Halls</h4>
                            <button type="submit" class="btn btn-success">Read more</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <h2 class="font-weight-bold text-auto text-danger pb-4">OUR HIGHLIGHTS</h2>
                <span class="text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis sed quia neque saepe id voluptatibus
                    aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam
                    aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis saepe praesentium eligendi illum
                    earum magni minus! Excepturi earum repudiandae, autem, dolor, debitis mollitia accusantium itaque
                    aspernatur voluptates expedita iste.repudiandae, autem, dolor, debitis mollitia accusantium itaque
                    aspernatur voluptates expedita iste.

                </span>
                <br>
                <br>
                <br>
                <a href="{{ route('service') }}" style="text-decoration: none" class="text-light">
                    <button type="submit" class="btn btn-warning "> Read More </button></a>

            </div>
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../images/fifth.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/hall.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/restro.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>

    <div class="container">
        <div class="row">

            <div class="col-6">
                {{-- <img src="images/room.jpg" alt="" class="w-100 shadow-lg"> --}}
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../images/room.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/fourth.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/room.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <h2 class="font-weight-bold text-left text-success pb-4">OUR ROOMS</h2>
                <span class="text-center">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis sed quia neque saepe id voluptatibus
                  aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam
                  aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facilis saepe praesentium eligendi illum
                  earum magni minus! Excepturi earum repudiandae, autem, dolor, debitis mollitia accusantium itaque
                  aspernatur voluptates expedita iste.repudiandae, autem, dolor, debitis mollitia accusantium itaque
                  aspernatur voluptates expedita iste.

              </span>
              <br>               
                <br>
                <br>
                <button type="submit" class="btn btn-primary"> <a href="{{ route('room') }}" style="text-decoration: none"
                        class="text-light">Read more</a> </button>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>



    {{-- <!-- Gallery -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <img
                src="images/b1.png"
                class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />
          
              <img
                src="images/b2.png"
                class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />
            </div>
          
            <div class="col-lg-4 mb-4 mb-lg-0">
              <img
                src="images/fifth.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />
          
              <img
                src="images/sixth.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />
            </div>
          
            <div class="col-lg-4 mb-4 mb-lg-0">
              <img
                src="images/sixth.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />
          
              <img
                src="images/third.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt=""
              />
            </div>
          </div>
          <!-- Gallery -->
    </div> --}}
@endsection
