@extends('apanel.app')

@section('content')
<div class="container-fluid">
    <div>
        @if (session()->has('success'))
    
        <p class="alert alert-success text-center">{{ session()->get('success') }}</p>
    
    @endif
    </div>
    <div>
        @if (session()->has('danger'))
      
        <p class="alert alert-danger text-center">{{ session()->get('danger') }}</p>
      
      @endif
      </div>
    <div>
        <h4 class="mt-4">Galleries</h4>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-2">
        <p class="border border-success p-2 rounded-sm">Total Images - <span
                class="text-primary"></span></p>
        <a class="btn btn-success" href="{{ route('gallery.create') }}">Add New Image</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-light">
        <caption>List of Images in the Gallery</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image Decription</th>
            <th scope="col">Path</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($gallery as $image)
            <tr>
                <th scope="row">{{ $image->id }}</th>
                <td>{{ $image->description }}</td>
                <td>{{ $image->images->path }}</td>
                {{-- <td>  {{ $room->status == 1 ? 'Published' : 'Unpublished' }}</td> --}}
                <td> <a href="{{ route('gallery.edit', $image->id) }}" class="btn btn-primary"><i
                    class="far fa-edit"></i></a>
                </td>
                <td>
                <form method="POST" action="{{ route('gallery.destroy', $image->id) }}">
                    @csrf
                    @method('DELETE')                    
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></form>
            </td>
              </tr>
            @endforeach
        
       
        </tbody>
      </table>
    </div>
@endsection