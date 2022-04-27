@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-danger font-weight-bolder text-monospace text-center">DELUXE ROOMS</h2>
        <hr>
        <div class="row">
            <div class="col">

            </div>
            <div class="col text-right">


            </div>
            <div class="w-100">
            </div>
            <div class="col">
                <p>
                    Our standard rooms have enough space to relax and enjoy. The rooms are interlocking with all of the
                    amenities in place. Adorned in the elegant interiors all these rooms are well-furnished and floors are
                    done with wooden parquet. The rooms are rigged with a working desk, and a coffee/tea maker. The spacious
                    rooms deliver tranquility and elegance and make you feel like home. Equipped with modern day amenities,
                    the room ensures a comfortable stay.
                </p>
                {{-- <hr style="margin: 0px">
                <h4 class="font-weight-bold text-monospace">Cozy and Comfortable Stay</h4>
                <span class=" font-weight-bolder">Starting at $50 Per Night</span>
                <hr> --}}
                <button class="btn btn-success">Book Room</button>

            </div>
            <div class="col">
                <img src="../images/b1.png" alt="" class="w-100 shadow-xl ">
                <hr style="margin: 0px">


            </div>
        </div>
        <hr>
        <h3 class="text-center font-weight-bolder text-primary">Deluxe Facilities</h3>

        <div class="row">

            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/wifi.jpg" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> Wi-Fi</p>
                                <p class="text-muted mb-0">Free WiFi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/tv.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> Television</p>
                                <p class="text-muted mb-0">LED TV</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/shower.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> Showers</p>
                                <p class="text-muted mb-0">Hot and Cold Showers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/telephone.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Telephone</p>
                                <p class="text-muted mb-0">24 hour Access</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/bed.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> King Size Bed</p>
                                <p class="text-muted mb-0">Comfortable Bedroom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/toiletries.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> Toileries</p>
                                <p class="text-muted mb-0">Comfortable Bedroom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/desk.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> Work Desk</p>
                                <p class="text-muted mb-0">Comfortable Bedroom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/towel.png" alt="" style="height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bolder mb-1"> Towels</p>
                                <p class="text-muted mb-0">Comfortable Bedroom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card" style="background-image: url('../images/texture.jpg')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="../images/service.png" alt="" style=" height: 40px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"> Room Service</p>
                                <p class="text-muted mb-0">We serve at your door</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" >
        <h2 class="font-weight-bolder text-danger text-left text-monospace">Useful Information</h2>
        <div class="row">
            <div class="col border border-success  py-2"  style="background-image: url('../images/texture.jpg')">
                <h5 class="font-weight-bold"> Check-in</h5>
            </div>
            <div class="col border border-success  py-2">
                <span >From 02:00 PM</span>
            </div>
            <div class="w-100"></div>
            <div class="col border border-success  py-2"  style="background-image: url('../images/texture.jpg')">
                <h5 class="font-weight-bold">Check-out </h5>
            </div>
            <div class="col border border-success  py-2"> <span >
                    Until 12:00 Noon</span></div>

        </div>
        <div class="row">
            <div class="col border border-success  py-2"  style="background-image: url('../images/texture.jpg')">
                <h5 class="font-weight-bold"> Important information</h5>
            </div>
            <div class="col border border-success py-2"><span >The price shown is based on the
                    occupancy and dates you have
                    searched for. Prices and availability are subject to change based on the arrival date, number of
                    nights
                    and occupancy searched for. All prices are inclusive of all local taxes.</span></div>
            <div class="w-100"></div>
            <div class="col border border-success  py-2"  style="background-image: url('../images/texture.jpg')">
                <h5 class="font-weight-bold">Pets </h5>
            </div>
            <div class="col border border-success  py-2"> <span >
                    Pets are not allowed</span></div>
        </div>
    </div>

<hr>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 font-weight-bold text-monospace" style="font-family: cursive;">SIMILAR ACCOMMODATION
                        </h2>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <a href="{{ route('standard') }}" style="text-decoration: none">
                                            <img class="img-fluid" alt="100%x280" src="../images/sixth.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title text-danger font-weight-bold">Standard Rooms</h4>
                                                <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Quasi laboriosam qui asperiores quia necessitatibus ullam laborum!
                                                    .</p>

                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <a href="{{ route('superdeluxe') }}" style="text-decoration: none">
                                            <img class="img-fluid" alt="100%x280" src="../images/third.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title text-danger font-weight-bold">Super Deluxe Rooms</h4>
                                                <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Quasi laboriosam qui asperiores quia necessitatibus ullam laborum!
                                                </p>

                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <a href="{{ route('suite') }}" style="text-decoration: none">
                                            <img class="img-fluid" alt="100%x280" src="../images/fourth.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title text-danger font-weight-bold">Suite Rooms</h4>
                                                <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Quasi laboriosam qui asperiores quia necessitatibus ullam laborum!
                                                </p>

                                            </div>
                                        </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <a href="{{ route('service') }}" style="text-decoration: none">
                                            <img class="img-fluid" alt="100%x280" src="../images/b1.png">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary font-weight-bold">Swimming Pool</h4> </a>
                                                <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Quasi laboriosam qui asperiores quia necessitatibus ullam laborum!
                                                </p>

                                            </div>
                                       
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <a href="{{ route('service') }}" style="text-decoration: none">
                                            <img class="img-fluid" alt="100%x280" src="../images/b2.png">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary font-weight-bold">Multi-Cuisine
                                                    Restaurant</h4> </a>
                                                <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Quasi laboriosam qui asperiores quia necessitatibus ullam laborum!
                                                </p>

                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <a href="{{ route('service') }}" style="text-decoration: none">
                                            <img class="img-fluid" alt="100%x280" src="../images/b1.png">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary font-weight-bold">Roof Top Swimming Pool
                                                </h4> </a>
                                                <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Quasi laboriosam qui asperiores quia necessitatibus ullam laborum!
                                                </p>

                                            </div>
                                        
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
