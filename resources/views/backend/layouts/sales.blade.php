@extends('backend.master')

@section('title')
<div class="row d-flex justify-content-between">
    <div class="col-6">
        <h3 class="font-weight-bold">All Sale</h3>
    </div>
</div>
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
         <form action="{{ route('sales') }}" method="get">
            <div>
                <div class="d-flex" style="align-items: center">
                    <div class="input-group no-border">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                          <i class="material-icons">search</i>
                          <div class="ripple-container"></div>
                        </button>
                      </div>
                      <div style="margin-left:20px">
                          <a class="btn btn-info btn-sm" href="{{ route('sales') }}">Reset</a>
                      </div>
                </div>
            </div>
          </form>

        </div>
    </div>


<table class="table table-bordered ">

  <thead>
    <tr style="background-color:#9c27b0; color:white; font-weight:900">
        <th scope="col">SN</th>
      <th scope="col">User Id</th>
      <th scope="col">Name</th>
      {{-- <th scope="col">Service Price</th> --}}
      <th scope="col">Paid Amount</th>
      <th scope="col">Due Amount</th>
      <th scope="col">Payment Type</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Sales Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($appointment as $key=>$data)

  @php
  $total =0;

    foreach($data->bookingDetails as $item){

        $total += $item->service_price * $item->service_quantity;
    }

  @endphp


    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $data->user_id}}</td>
      <td>{{ $data->name}}</td>
      <td>{{ $data->paid_amount}}</td>
      <td>{{  $total - $data->paid_amount }}</td>
      <td>{{ $data->payment_type}}</td>
      <td>{{ $data->appointment_date}}</td>
      <td>{{ optional($data->sales_date)->format('Y-m-d h:i:s A')}}</td>
      <td>
        <a class="btn btn-info btn-sm" href="{{ route('invoice', $data->id) }}">View</a>
      </td>
    </tr>

    @endforeach
   </tbody>
   </table>




   {{-- {{ $customers->links() }} --}}



 <!-- Button trigger modal -->
<!-- Modal -->

 {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form action="{{ route('sales.add')}}"  method="post">
    @csrf
      <div class="mb-3">
        <label for="id" class="form-label">Customer Id</label>
        <select name="customer_id" id="" class="form-control">
            @foreach ($customers  as $customer)
            <option value="{{ $customer }}">{{ $customer->customer_name }}</option>
            @endforeach

        </select>
      </div>

      <div class="mb-3">
        <label for="id" class="form-label">Service Id</label>
            <select name="service_id" id="" class="form-control">
                @foreach ($services  as $service)
                <option value="{{ $service }}">{{ $service->service_name }}</option>
                @endforeach

            </select>
      </div>

      <div class="mb-3">
        <label for="Paid_amount" class="form-label">Paid Amount</label>
        <input type="integer" class="form-control" id="Paid_amount" name="Paid_amount" placeholder="Enter Amount">
      </div>

      <div class="mb-3">
        <label for="due_amount" class="form-label">Due Amount</label>
        <input type="integer" class="form-control" id="due_amount" name="due_amount" placeholder="Enter Amount">
      </div>

      <div class="mb-3">
        <label for="payment_type" class="form-label">Payment Type</label>
        <textarea name="payment_type" id="" class="form-control" cols="30" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div> --}}

@endsection
