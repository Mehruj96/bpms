@extends('backend.master')


@section('title')
<h3 class="font-weight-bold">All Customer</h3>
@endsection

@section('content')


<table class="table table-bordered ">

  <thead>
    <tr style="background-color:#9c27b0; color:white; font-weight:900">
      <th scope="col">Customer Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach( $customers as $key=>$data)
    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $data->customer_name}}</td>
      <td>{{ $data->customer_email}}</td>
      <td>{{ $data->customer_contact}}</td>
      <td>{{ $data->customer_address}}</td>
      <td>
        <a class="btn btn-info btn-sm" href="{{ route('customer.edit', $data->id) }}">Edit</a>
        <a class="btn btn-danger btn-sm" href="{{ route('customer.delete', $data->id) }}">Delete</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
{{ $customers->links() }}

<td><a class='btn btn-success btn-sm' data-toggle="modal" data-target="#exampleModal" href="   ">Add Customer</a>

</td>



<!-- Button trigger modal -->
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form action="{{ route('customer.add')}}"  method="post">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="customer_name" id="name" placeholder="Enter Name">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="customer_email" placeholder="Enter Email">
      </div>

      <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="number" class="form-control" id="contact" name="customer_contact" placeholder="Enter phone Number">
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea name="customer_address" id="" class="form-control" cols="30" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection
