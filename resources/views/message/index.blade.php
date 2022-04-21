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
        <h4 class="mt-4 text-center font-weight-bolder text-success">Messages</h4>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-2">
        <p class="border border-success p-2 rounded-sm">Total Messages - <span
                class="text-primary"></span></p>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($message as $msg)
            <tr>
              <th scope="row">{{ $msg->id }}</th>
              <td>{{ $msg->name }}</td>
              <td>{{ $msg->email }}</td>
              <td>{{ $msg->phone }}</td>
              <td>{{ $msg->message }}</td>
              <td> <form method="POST" action="{{ route('messages.destroy', $msg->id) }}">
                @csrf
                @method('DELETE')                    
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></form></td>
            </tr>
            @endforeach
        
         
        </tbody>
      </table>
</div>

@endsection