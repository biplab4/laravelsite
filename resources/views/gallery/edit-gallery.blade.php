@extends('apanel.app')

@section('content')
<div class="container p-3">
    <h3 class="text-black-50 text-center">Edit Gallery Pictures</h3>
<hr>
<div class="row">
    <div class="col-sm-6 mx-auto mt-2">

        @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif



        <form method="POST"  action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="artileInput">Edit image description</label>
            <div class="input-group mb-3">
                <input type="text" name="description" value="{{ $gallery->description }}"
                    class="form-control @error('description') is-invalid @enderror">
            </div>

            <label for="artileInput">Update Image</label>

            <div class="custom-file mb-3 p-2">

                <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile">
                    <div class="mt-1">
                        {{ $gallery->images->path }}
                    </div>
                </label>
           
                        <a href="#" class="d-block mb-4 h-100">
                <img src="{{ Storage::url($gallery->images->path) }}"
                              alt="Not In Database" class="mt-2" width="100%">
              </a>
                   <br><br><br><br><br><br><br><br><br><br><br><br>
              <button class="btn btn-success" type="submit">Update Image</button>
         
        </form>
    </div>
</div>
</div>

@endsection
