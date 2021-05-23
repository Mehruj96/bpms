@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">All Service</h3>
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Service </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="service_name" class="form-control" value="{{ $service->service_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="number" name="service_price" class="form-control" value="{{ $service->service_price }}">
                                    </div>
                                </div>
                                <div class="form">
                                        <label class="form-label">Upload image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


            @endsection
