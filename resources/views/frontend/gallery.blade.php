@extends('layouts.app')
@section('content')

<!-- Page Content -->
<div class="container">

    <h1 class="fw-light text-center font-weight-bolder text-warning text-lg-start mt-4 mb-0">Our Gallery</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-start">
  @foreach ($images as $image)
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
      <img src="{{ isset($image->path) ? Storage::url($image->path) : "https://picsum.photos/400" }}"
                    alt="Not In Database" class="mt-2" width="100%">
    </a>
  </div>
  @endforeach
    </div>
  
  </div>
@endsection