@extends('backend.master')


@section('title')
<h3 class="font-weight-bold">Appointment View</h3>
@endsection

@section('content')


<div class=" col-lg-12 col-md-12 col-sm-12 col-12 padding">
    {{-- <div class="card">
        <div class="card-header p-4">
            <div class="float-right">
                Date: 12 Jun,2019
            </div>
        </div> --}}
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-12">
                    <div class="text-dark mb-1">Name:{{ $Napointment->name }} </div>
                    <div>Email:{{ $Napointment->email }} </div>
                    <div>Contact: {{ $Napointment->contact }}</div>
                    <div>Appointment Id:{{ $Napointment->id }} </div>
                    <div>Appointment Date:{{ $Napointment->appointment_date }}</div>
                </div>

            </div>
            <div class="table-responsive-sm" style="margin-top: 65px;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Service Name</th>
                            <th class="center">Qty</th>
                            <th class="right">Service Price</th>
                            <th class="right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($booking as $key=>$services )

                        <tr>
                            <td class="center">{{ $key+1 }}</td>
                            <td class="left strong">{{ $services->bookingService->service_name }}</td>
                            <td class="">{{ $services->service_quantity }}</td>
                            <td class="right">{{ $services->bookingService->service_price }}</td>
                            <td class="right">{{ $services->service_quantity*$services->bookingService->service_price }}</td>
                            @php
                                $total = $total + ($services->service_quantity*$services->bookingService->service_price)
                            @endphp

                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Total</strong>
                                </td>
                                <td class="right">{{ $total }}</td>
                            </tr>
                        </tbody>
                    </table>

                     {{-- <a class="btn btn-warning btn-sm" href="{{ route('sales.create',$data->id) }}">Sales</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>















@endsection
