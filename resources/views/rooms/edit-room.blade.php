@extends('apanel.app')

@section('content')
    <div class="container-fluid p-3">
        <h3 class="text-black-50 text-center">Edit Room Details</h3>
        <hr>
        <div class="d-flex justify-content-between align-items-center mb-2">
            {{-- <p class="border font-weight-bold border-primary p-2 text-sm rounded-sm">Published At - <span
                class="text-muted">{{ $data->published_at }}</span></p>
        <p class="border font-weight-bold border-success p-2 text-sm rounded-sm">Latest Update By - <span
                class="text-muted">{{ $data->modified_by }}</span></p>
        <p class="border font-weight-bold border-success text-sm p-2 rounded-sm">Updated At - <span
                class="text-muted">{{ $data->updated_at }}</span></p>
        <p class="border font-weight-bold border-success text-sm p-2 rounded-sm">Created At - <span
                class="text-muted">{{ $data->created_at }}</span></p> --}}

        </div>
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



                <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="artileInput">Edit Room Type</label>
                    <div class="input-group mb-3">
                        <input type="text" name="type" value="{{ $room->type }}"
                            class="form-control @error('type') is-invalid @enderror">
                    </div>

                    <label for="articleInput">Edit Room Description</label>
                    <div class="input-group mb-3">
                        <textarea name="description" id=""
                            class="form-control @error('description') is-invalid @enderror">{{ $room->description }}</textarea>
                    </div>

                    <label for="artileInput">Update Room Image</label>

                    <div class="custom-file mb-3 p-2">

                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">
                            <div class="mt-1">
                                {{ $img }}
                            </div>
                        </label>
                    </div>


                    <p class="text-success"> Selected Facilities: </p>
                    @foreach ($room->facility as $item)
                        <p class="text-muted"> {{ $item }}</p>
                    @endforeach
                    <br>
                    <div class="input-group">
                        <label><strong>Select more/less Facilities :</strong></label>
                        <select class="form-control" name="facility[]" multiple="">
                            <option value="shower">Shower Bathtub</option>
                            <option value="king">King Bed</option>
                            <option value="telephone">Telephone</option>
                            <option value="wifi">Wi-Fi</option>
                            <option value="ac">AC</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Edit Room Charge</label>
                        <div class="input-group mb-3">
                            <input type="number" name="charge" value="{{ $room->charge }}">
                        </div>
                    </div>


                    <div class="d-flex">
                        <button class="btn btn-success" type="submit">Update Room Details</button>
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
