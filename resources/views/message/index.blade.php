@extends('apanel.app')

@section('content')
<div>
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
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($message as $msg)
                
            @endforeach
          <tr>
            <th scope="row">{{ $msg->id }}</th>
            <td>{{ $msg->name }}</td>
            <td>{{ $msg->email }}</td>
            <td>{{ $msg->message }}</td>
          </tr>
         
        </tbody>
      </table>
</div>

@endsection