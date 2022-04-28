@extends('layouts.app')

@section('content')
<div class="container pt-4 pb-4" style="background-image: url('../images/texture.jpg')">
    <h2 class="text-center text-warning font-weight-bolder">OUR ROOMS</h2>
</div>
<br>
 <div class="container">
       
        <div class="row">
            <div class="col">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('standard') }}" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Standard Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Read More..</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('deluxe') }}" style="text-decoration: none">
                        <img src="images/b1.png" alt="Lights" style="width:100%"class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold"> Deluxe Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Read More..</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('superdeluxe') }}" style="text-decoration: none">
                        <img src="images/b2.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Super Deluxe Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Read More..</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="thumbnail shadow-lg">
                    <a href="{{ route('suite') }}" style="text-decoration: none">
                        <img src="images/b2.png" alt="Lights" style="width:100%" class="img-thumbnail">
                        <div class="caption">
                            <h4 class="text-primary font-weight-bold">Suite Room</h4>
                            <span class="text-muted">Lorem ipsum lorem lorem.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Read More..</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

