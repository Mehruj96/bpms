@extends('frontend.master')

@section('My Profile')
menu-active
@endsection

@section('content')

<section id="about" class="wow fadeInUp sec-padding">
    <div class="container">
      <div class="section-header">
        <h2 class="white">Services</h2>
      </div>
      <div class="row">

        <table class="table table-bordered ">

            <thead>
              <tr style="background-color:#9c27b0; color:white; font-weight:900">
                <th scope="col">Service Number</th>
                <th scope="col">Service Name</th>
                <th scope="col">Service Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                @php
                $total = 0;
                @endphp

                @foreach ($booking as $key=>$services )
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $services->bookingService->service_name }}</td>
                    <td>{{ $services->bookingService->service_price }}</td>
                    <td>{{ $services->service_quantity }}</td>
                    <td>{{ $services->service_quantity*$services->bookingService->service_price }}</td>
                     @php
                        $total = $total + ($services->service_quantity*$services->bookingService->service_price)
                    @endphp

                </tr>
            @endforeach
            </tbody>
        </table>

        <td>
            <a class="btn btn-danger btn-sm" href="#">Cancel Appointment</a>
        </td>


        </h3>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-5">
            </div>
            <div class="col-lg-4 col-sm-5 ml-auto">
                <table class="table table-clear">
                    <tbody>
                        <tr>
                            <td class="left">
                                <strong class="text-white">Total</strong>
                            </td>
                            <td class="right">{{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

      </div>

    </div>
</section>




@endsection
