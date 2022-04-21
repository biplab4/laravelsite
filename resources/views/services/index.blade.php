@extends('apanel.app')

@section('content')
<div class="container">
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
        <h4 class="mt-4">Our Services</h4>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-2">
        <p class="border border-success p-2 rounded-sm">Total Services - <span
                class="text-primary"></span></p>
        <a class="btn btn-success" href="{{ route('services.create') }}">Add Services</a>
    </div>
    <table class="table table-striped table-light">
        <caption>List of Services</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Service Type</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($service as $services)
           <tr>
            <th scope="row">{{ $services->id }}</th>
            <td>{{ $services->type }}</td>
            <td>{{ $services->description }}</td>
            <td> {{ $services->status == 1 ? 'Published' : 'Unpublished' }}</td>
            <td> <a href="{{ route('services.edit', $services->id) }}" class="btn btn-primary"><i
                class="far fa-edit"></i></a>
            </td>
            <td>
            <form method="POST" action="{{ route('services.destroy', $services->id) }}">
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