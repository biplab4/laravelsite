@extends('layouts.app');

@section('content')

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

@endsection