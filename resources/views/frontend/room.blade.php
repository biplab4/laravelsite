@extends('layouts.app')

@section('content')


{{-- <div class="container">
    <h2 class="text-primary font-weight-bold text-center" style="font-family: cursive">Our Rooms</h2>
    <div class="card-group">

        <div class="card">
            <img class="card-img-top" src="images/b1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title  text-danger font-weight-bold">Standard Rooms</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Book a room</button>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/b2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title  text-danger font-weight-bold">Deluxe Rooms</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                    content.</p>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Book a room</button>
            </div>
        </div>

    </div>

</div>
<br><br>
<div class="container">
    
    <div class="card-group">

        <div class="card">
            <img class="card-img-top" src="images/b1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-danger font-weight-bold">Super Deluxe Rooms</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Book a room</button>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/b2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-danger font-weight-bold">Suite Rooms</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Book a room</button>
            </div>
        </div>

    </div>

</div>
<br><br> --}}
 <div class="container">
        <h2 class="text-danger font-weight-bolder text-uppercase text-center" style="font-family: cursive">Our Rooms</h2>
        <div class="row">
            <div class="col">
                <div class="thumbnail">
                    <a href="{{ route('standard') }}" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Standard Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Book a room</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%"class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold"> Deluxe Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Book a room</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/b2.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Super Deluxe Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Book a room</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="thumbnail">
                    <a href="" style="text-decoration: none">
                        <img src="images/b2.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Sweet Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Book a room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

