@extends('frontend.master')

@section('service')
menu-active
@endsection

@section('content')


<section id="about" class="wow fadeInUp sec-padding">
    <div class="container">
      <div class="section-header">
        <h2 class="white">Beautician Profile</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 about-img">
            <img height="400px" width="5px" src="{{url('/uploads/beautician/'.$beautician->beautician_image)}}" alt="" class="card-img-top">
        </div>

        <div class="col-lg-6 content">

          <h3> Beautician Name: {{ $beautician->beautician_name }}  </h3>
          <h3> Beautician Contact:{{ $beautician->beautician_number }}</h3>
          <h3> Beautician Address:{{ $beautician->beautician_address }}</h3>
        </h3>
        </div>
      </div>

    </div>
  </section>














@endsection
