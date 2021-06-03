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


          <table class="table table-bordered ">

            <thead>
              <tr style="background-color:#9c27b0; color:white; font-weight:900">
                <th scope="col">Appoinment Date</th>
                <th scope="col">Appointment Time</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                 @foreach ($appointment as $data )
                <tr>

                    <td>{{ $data->appointment_date }}</td>
                    <td>{{ $data->appointmentSlots->from_time }}</td>
                    <td> <a class="btn btn-danger btn-sm" href={{ route('cancelservice',$data->id) }}>View Appointment</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>




        </h3>
        </div>

      </div>

    </div>
  </section>


@endsection





