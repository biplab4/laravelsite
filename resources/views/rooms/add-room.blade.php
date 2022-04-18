@extends('apanel.app')

@section('content')
    

<div class="container-fluid p-3">
    <h3 class="text-black-50 text-center">Add a room</h3>
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

            <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="formGroupExampleInput">Room type</label>
                <div class="input-group mb-3">
                    <input type="text"
                           name="type"
                           value="{{ old('type') }}"
                         
                           class="form-control @error('type') is-invalid @enderror">
                </div>
                
                <label for="formGroupExampleInput">Description</label>
                <div class="input-group mb-3">
                    <textarea name="description" id=""  class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                </div>

                <label for="formGroupExampleInput">Image for room</label>
                <div class="custom-file mb-3 p-2">                        
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose your image</label>
                </div>

                <div class="form-group mb-3">
                    <label for="formGroupExampleInput">Room Charge</label>
                    <div class="input-group mb-3">
                        <input type="number" name="charge" id="" value="{{ old('charge') }}">
                    </div>
                   
                </div>
                <div class="d-flex">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('page_scripts')
<script>
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("customFile").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
})
</script>
@endsection