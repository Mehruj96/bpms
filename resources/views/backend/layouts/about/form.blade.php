@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">About Us</h3>
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">About Us</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('aboutus.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea name="about_info" id="about_info" rows="5" placeholder="About Info"></textarea>
                    </div>
                  </div>

                  <div class="form">
                    <label for="about_image" class="form-label">Upload image</label>
                    <input type="file" class="form-control" id="about_image" name="about_image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>


@endsection
