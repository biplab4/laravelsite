@extends('apanel.app')

@section('content')
<div>
    <div>
        @if (session()->has('success'))

        <p class="alert alert-success text-center">{{ session()->get('success') }}</p>

    @endif
    </div>
    <div>
        <h4 class="mt-4">Our Services</h4>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-2">
        <p class="border border-success p-2 rounded-sm">Total Services - <span
                class="text-primary"></span></p>
        <a class="btn btn-success" href="">Add Services</a>
    </div>
    <table class="table table-striped table-light">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Service Type</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
           
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td> <a href="" class="btn btn-primary"><i
                    class="far fa-edit"></i></a>
                </td>
                <td>
                <form method="POST" action="">
                    @csrf
                    @method('DELETE')                    
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></form>
            </td>
              </tr>
       
        
       
        </tbody>
      </table>
</div>
@endsection