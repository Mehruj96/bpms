@extends('backend.master')
@section('title')
<h3 class="font-weight-bold">Beauticians</h3>
@endsection

@section('content')

<table class="table table-bordered">
    <thead>
        <tr style="background-color:#9c27b0; color:white; font-weight:900">
            <th scope="col">Seriel No</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($beautician as $data)
        <tr>
            <th>{{ $loop->index + 1 }}</th>
            <td>{{ $data->beautician_name }}</td>
            <td>{{ $data->beautician_number }}</td>
            <td>{{ $data->beautician_address }}</td>
            <td>
                <img height="80" width="80" src="{{ url('/uploads/beautician/', $data->beautician_image) }}" alt="">
            </td>
            <td>
                <a class="btn btn-dark btn-sm" href="{{ route('beautician.edit', $data->id) }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ route('beautician.delete', $data->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<td><a class='btn btn-success btn-sm' data-toggle="modal" data-target="#exampleModal" href="   ">Add Beautician</a></td>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('beautician.add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="beautician_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="beautician_name" id="beautician_name" placeholder="Enter Name">
                    </div>

                    <div class="mb-3">
                        <label for="beautician_contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="beautician_number" name="beautician_number" placeholder="Enter phone Number">
                    </div>

                    <div class="mb-3">
                        <label for="beautician_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="beautician_address" name="beautician_address"
                            placeholder="Enter Address Number">
                    </div>

                    <div class="mb-3">
                        <label for="beautician_image" class="form-label">Upload image</label>
                        <input type="file" class="form-control" id="beautician_image" name="beautician_image">
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
