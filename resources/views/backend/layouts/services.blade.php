@extends('backend.master')


@section('title')
<h3 class="font-weight-bold">All Service</h3>
@endsection

@section('content')

<table class="table table-bordered">
        <thead>
            <tr style="background-color:#9c27b0; color:white; font-weight:900; height:20px; width: 100px" >
            <th scope="col">#</th>
            <th scope="col">Service_Name</th>
            <th scope="col">Service_Price </th>
            <th scope="col">Images </th>
            <th scope="col">Action  </th>
            </tr>
        </thead>
        <tbody>

        @foreach( $services as $key=>$data)
    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $data->service_name}}</td>
      <td>{{ $data->service_price}}</td>
      <td ><img style="height: 100px" src="{{ url('/uploads/service/'.$data->image) }}" alt=""></td>

      <td>
        <a class="btn btn-info btn-sm" href="#">Edit</a>
        <a class="btn btn-danger btn-sm" href="{{ route('services.delete', $data->id) }}">Delete</a>
      </td>
    </tr>

      @endforeach

    </tbody>

    </table>

<td><a class='btn btn-success btn-sm' data-toggle="modal" data-target="#exampleModal" href="">Add Services</a>
</td>


<!-- Button trigger modal -->
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form action="{{ route('services.add')}}"  method="post" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label"> Service Name</label>
        <input type="text" class="form-control" name="service_name" id="name" placeholder="Enter Name">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="service_price" placeholder="Enter price">
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>

  <!--<div class="mb-3">
        <label for="contact" class="form-label">Special_Service</label>
        <input type="number" class="form-control" id="contact" name="customer_contact" placeholder="Enter Service">
      </div>

      <div class="mb-3">
        <label for="address" class="form-label"></label>
        <textarea name="customer_address" id="" class="form-control" cols="30" rows="3"></textarea>
        </div>
      </div>-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection
