@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">Time Slot</h3>
@endsection


@section('content')
<table class="table table-bordered">
        <thead>
            <tr style="background-color:#9c27b0; color:white; font-weight:900">
            <th scope="col">Id</th>
            <th scope="col">From Time</th>
            <th scope="col">To Time</th>
            <th scope="col">Status </th>
            <th scope="col">Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach( $slots as $key=>$data)
            <tr>
              <th scope="row">{{ $key+1}}</th>
              <td>{{ optional($data->from_time)->format('h:i:s A')}}</td>
              <td>{{ optional($data->to_time)->format('h:i:s A')}}</td>
              <td>{{ $data->status}}</td>
              <td>
                <a class="btn btn-danger btn-sm" href="{{ route('slots.delete', $data->id) }}">Delete</a>
              </td>


            </tr>
            @endforeach
        </tbody>
    </table>

        <td>
        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Create</button>
        </td>

   {{-- Form --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Time Slot</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

              <form action=""  method="post">
              @csrf
                <div class="mb-3">
                  <label for="from" class="form-label">From Time</label>
                  <input type="time" class="form-control" name="from_time" id="from_time" placeholder="Enter Number">
                </div>

                <div class="mb-3">
                  <label for="to" class="form-label">To Time</label>
                  <input type="time" class="form-control" id="to_time" name="to_time" placeholder="Enter Number">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>





@endsection
