@extends('apanel.app')

@section('content')
<div class="container-fluid p-3">
    <h3 class="text-black-50 text-center">Edit Service Details</h3>
    <hr>
    {{-- <div class="d-flex justify-content-between align-items-center mb-2">

    </div> --}}
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



        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="artileInput">Edit Service Type</label>
            <div class="input-group mb-3">
                <input type="text" name="type" value="{{ $service->type }}"
                    class="form-control @error('type') is-invalid @enderror">
            </div>

            <label for="articleInput">Edit Service Description</label>
            <div class="input-group mb-3">
                <textarea name="description" id=""
                    class="form-control @error('description') is-invalid @enderror">{{ $service->description }}</textarea>
            </div>

            <label for="artileInput">Update Service Image</label>

            <div class="custom-file mb-3 p-2">

                <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile">
                    <div class="mt-1">
                        {{ $img }}
                    </div>
                </label>
            </div>


            <div class="d-flex">
                <button class="btn btn-success" type="submit">Update Service Details</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
@push('page_scripts')
<script>
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("customFile").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
})
</script>
@endpush