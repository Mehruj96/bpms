@extends('frontend.master')

@section('My Profile')
menu-active
@endsection

@section('content')

<section id="about" class="wow fadeInUp sec-padding">
    <div class="container">
      <div class="section-header">
        <h2 class="white">My Profile</h2>
      </div>
      <div class="row">
        {{-- <div class="col-lg-6 about-img">
            <img height="400px" width="5px" src="{{url('/uploads/service/')}}" alt="" class="card-img-top">
        </div> --}}
        <div class="col-lg-6 content">

          <h3><b class="text-info">Name:</b> {{ Auth::user()->name }}</h3>
          <h3><b class="text-info">Email:</b>  {{ Auth::user()->email }}</h3>
          <h3><b class="text-info">Contact:</b>  {{ Auth::user()->contact }}</h3>
          <h3><b class="text-info">Address:</b>  {{ Auth::user()->address }}</h3>
          <h3><b class="text-info">Service:
          <h3><b class="text-info">Appointment Date:
          <h3><b class="text-info">Appointment Time:



   {{-- <td>
        <a class="btn btn-danger btn-sm" href="{{ route('appointmentf',$service->id) }}">Booked For an Appointment</a>
    </td> --}}


        </h3>
        </div>

      </div>

    </div>
  </section>


@endsection
