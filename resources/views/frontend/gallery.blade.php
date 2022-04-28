@extends('layouts.app')
@section('content')
<div class="container pt-4 pb-4" style="background-image: url('../images/texture.jpg')">
  <h2 class="text-center text-warning font-weight-bolder">OUR GALLERY </h2>
</div>
<br>
<!-- Page Content -->
<div class="container">

  
    <div class="row text-center text-lg-start">
  @foreach ($gallery as $image)
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
      <img src="{{ isset($image->images->path) ? Storage::url($image->images->path) : "https://picsum.photos/400" }}"
                    alt="Not In Database" class="mt-2" width="100%">
    </a>
  </div>
  @endforeach
    </div>
  
  </div>
@endsection