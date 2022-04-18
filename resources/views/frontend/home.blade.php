@extends('layouts.app')

@section('content')
    <div class="">
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
        
        <hr>
    </div>
    <div class="container">
        <div>
            <h1 class="text-center text-primary font-weight-bold" style="font-family: cursive">Welcome to Shrestha Residency
            </h1>
            <p class="text-center text-muted">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis sed quia neque saepe id voluptatibus <br>
                aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam <br>
                debitis?
            </p>
        </div>

    </div>
    <hr>
    <div class="">
        <h2 class="text-center text-warning font-weight-bold" style="font-family: cursive">Our Services</h2><br>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Multi-Cuisine Restaurant</h4>
                            <button type="submit" class="btn btn-success">Read more</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/drinking.jpg" alt="Nature" style="width:100%">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Super Standard Bar</h4>
                            <button type="submit" class="btn btn-success">Read more</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
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
            <div class="col-7">
                <img src="images/fifth.jpg" alt="" class="w-100">
            </div>
            <div class="col-5">
                <h2 class="font-weight-bold text-center text-danger" style="font-family: cursive">OUR HIGHLIGHTS</h2>
                <span class="text-muted text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis sed quia neque saepe id voluptatibus
                    <br>
                    aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam
                    <br>
                    debitis?
                </span>
            </div>
        </div>
    </div>
    <hr>
    {{-- <div class="container">
        <h2 class="text-primary font-weight-bold text-center">Our Rooms</h2>
        <div class="row">
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-warning font-weight-bold">Standard Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%"class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-warning font-weight-bold"> Deluxe Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/third.jpg" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-warning font-weight-bold">Super Deluxe Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/room.jpg" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-warning font-weight-bold">Sweet Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    
        
    <div class="container">
        
        <div class="row">
           
            <div class="col-7">
                <img src="images/room.jpg" alt="" class="w-100">
            </div>
            <div class="col-5">
                <h2 class="font-weight-bold text-center text-success" style="font-family: cursive">OUR ROOMS</h2>
                <span class="text-muted text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis sed quia neque saepe id voluptatibus
                    <br>
                    aliquid iusto consequuntur, doloremque sint dolorem vel esse modi, a iure fuga. Voluptatibus, veniam
                    <br>
                    debitis?
                </span><br>
                <button type="submit" class="btn btn-primary"> <a href="{{ route('room') }}" style="text-decoration: none" class="text-light">Read more</a> </button>
            </div>
        </div>
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
