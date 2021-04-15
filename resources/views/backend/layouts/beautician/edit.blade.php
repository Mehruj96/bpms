@extends('backend.master')
@section('title')
<h3 class="font-weight-bold">All Beautician</h3>
@endsection
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Beautician Profile</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('beautician.update', $beautician->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" name="beautician_name" class="form-control" value="{{ $beautician->beautician_name }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Contact</label>
                      <input type="number" name="beautician_number" class="form-control" value="{{ $beautician->beautician_number }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" name="beautician_address" class="form-control" value="{{ $beautician->beautician_address }}">
                    </div>
                  </div>
                  {{-- <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">image</label>
                      <input type="file" name="beautician_image" class="form-control">
                    </div>
                  </div> --}}

                  <div class="form">
                    <label for="beautician_image" class="form-label">Upload image</label>
                    <input type="file" class="form-control" id="beautician_image" name="beautician_image">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Update Beautician</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>


@endsection
