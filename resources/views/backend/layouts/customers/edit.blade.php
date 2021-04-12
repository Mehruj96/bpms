@extends('backend.master')


@section('title')
<h3 class="font-weight-bold">All Customer</h3>
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Customer Profile</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('customer.update', $customers->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" name="customer_name" class="form-control" value="{{ $customers->customer_name }}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" name="customer_email" class="form-control" value="{{ $customers->customer_email }}">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Number</label>
                      <input type="Number" name="customer_contact" class="form-control" value="{{ $customers->customer_contact }}">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" name="customer_address" class="form-control" value="{{ $customers->customer_address }}">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>


@endsection
