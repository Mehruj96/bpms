@extends('frontend.master')

@section('service')
menu-active
@endsection

@section('content')

<!--==========================
      Services Section
    ============================-->
      <section id="about" class="wow fadeInUp sec-padding">
        <div class="container">
          <div class="section-header">
            <h2 class="white">Our Service</h2>
          </div>
          <div class="row">
            <div class="col-lg-6 about-img">
                <img height="400px" width="5px" src="{{url('/uploads/service/'.$service->image)}}" alt="" class="card-img-top">
            </div>

            <div class="col-lg-6 content">

              <h3 class="font-bold"> Service Name:  <span style="margin-left:10px">{{ $service->service_name }}</span>  </h3>
              <h3> Service Price: {{ $service->service_price }}  </h3>
              <h3> Beautician Name:{{ $service->beautician_name }}</h3>

        {{-- <td>
            <a class="btn btn-danger btn-sm" href="{{ route('appointmentf',$service->id) }}">Booked For an Appointment</a>
        </td> --}}


            </h3>
            </div>
          </div>

        </div>
      </section><!-- #about -->

@endsection
