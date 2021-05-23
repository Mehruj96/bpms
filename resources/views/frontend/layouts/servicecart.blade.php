@extends('frontend.master')

@section('service')
menu-active
@endsection


@section('content')

<section id="team" class="wow fadeInUp sec-padding">
    <div class="container">
        <div class="section-header">
            <h2>Service List</h2>
        </div>

        <td>
            <Button class='btn btn-danger mb-2' ><a href="{{ route('cart.alldelete') }}" class="removeService">Remove all service</a></Button>
        </td>

        <table class="table table-bordered ">

            <thead>
              <tr style="background-color:#9c27b0; color:white; font-weight:900">
                <th scope="col">Service Number</th>
                <th scope="col">Service Name</th>
                <th scope="col">Service Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($cartData as $data )
                   <tr>
                       <td>{{ $data->id  }}</td>
                       <td>{{ $data->name  }}</td>
                       <td>{{ $data->price  }}</td>
                       <td>{{ $data->qty  }}</td>
                       <td>
                       <a class="btn btn-danger btn-sm" href="{{ route('cart.delete',$data->rowId) }}">Remove</a>
                       </td>
                   </tr>
               @endforeach
            </tbody>
        </table>

        <td>
            <a class='btn btn-success btn-sm' href="{{ route('servicesf') }}">Continue Add Service</a>
        </td>

        <td>
            <a class='btn btn-warning btn-sm' href="{{ route('appointmentf',1) }}">Make an Appointment</a>
        </td>

@endsection
