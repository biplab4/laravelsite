@extends('apanel.app')

@section('content')
<div class="container-fluid p-3">
    <h3 class="text-black-50 text-center">Add a Banner</h3>
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

            <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="formGroupExampleInput">Banner Rank</label>
                <div class="input-group mb-3">
                    <input type="text"
                           name="rank"
                           value="{{ old('rank') }}"
                         
                           class="form-control @error('rank') is-invalid @enderror">
                </div>
                

                <label for="formGroupExampleInput">Banner Images</label>
                <div class="custom-file mb-3 p-2">                        
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose your image</label>
                </div>

                <div class="d-flex">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection