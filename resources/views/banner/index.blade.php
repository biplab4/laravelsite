@extends('apanel.app')

@section('content')
   <div>
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
            <h4 class="mt-4">Banners</h4>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class="border border-success p-2 rounded-sm">Total Banners - <span
                    class="text-primary"></span></p>
            <a class="btn btn-success" href="{{ route('banners.create') }}">Add Banner</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-light">
                <caption>Banners must be of minimum 3 images</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Banner rank</th>
                    <th scope="col">Path</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                    <tr>
                        <th scope="row">{{ $banner->id }}</th>
                        <td>{{ $banner->rank }}</td>
                        <td>{{ $banner->images->path }}</td>
                        {{-- <td>  {{ $room->status == 1 ? 'Published' : 'Unpublished' }}</td> --}}
                        <td> <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-primary"><i
                            class="far fa-edit"></i></a>
                        </td>
                        <td>
                        <form method="POST" action="{{ route('banners.destroy', $banner->id) }}">
                            @csrf
                            @method('DELETE')                    
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></form>
                    </td>
                      </tr>
                    @endforeach
                
               
                </tbody>
              </table>
            </div>
   </div>
@endsection