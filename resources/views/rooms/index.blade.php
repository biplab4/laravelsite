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
            <h4 class="mt-4">Rooms</h4>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class="border border-success p-2 rounded-sm">Total Rooms - <span
                    class="text-primary"></span></p>
            <a class="btn btn-success" href="{{ route('rooms.create') }}">Add Room</a>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-light">
            <caption>List of Rooms</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Room Type</th>
                <th scope="col">Description</th>
                <th scope="col">Charge</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <th scope="row">{{ $room->id}}</th>
                    <td>{{ $room->type }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->charge }}</td>
                    <td>  {{ $room->status == 1 ? 'Published' : 'Unpublished' }}</td>
                    <td> <a href="{{ route('rooms.edit',$room->id ) }}" class="btn btn-primary"><i
                        class="far fa-edit"></i></a>
                    </td>
                    <td>
                    <form method="POST" action="{{ route('rooms.destroy', $room->id) }}">
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