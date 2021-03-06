@extends('backend.master')

@section('title')
<div class="row d-flex justify-content-between">
    <div class="col-6">
        <h3 class="font-weight-bold">New Appointments</h3>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
         <form action="{{ route('new') }}" method="get">
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
                          <a class="btn btn-info btn-sm" href="{{ route('new') }}">Reset</a>
                      </div>
                </div>
            </div>
          </form>

        </div>
    </div>



    @if (session('mark_success'))
        {{ session('mark_success') }}
    @endif

        <form action="{{ route('appointment.markread') }}" method="post">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color:#9c27b0; color:white; font-weight:900">
                    <th scope="col">Mark</th>
                    <th scope="col">Serial No</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Slot_id</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointment as $key=>$data)
                        <tr>

                            <td>
                                <input type="checkbox" name="mark_read[]" value="{{ $data->id }}">
                            </td>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                             {{-- <td>
                                @isset($data->appointmentService->service_name)
                                    {{ $data->appointmentService->service_name }}
                                @endisset
                            </td> --}}
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->appointment_date }}</td>
                            <td>{{ $data->slot_id }}</td>
                            <td>
                                {{-- <a class="btn btn-success btn-sm" href="{{ route('appointment.delete', $data->id) }}">Accepted</a> --}}

                                <a class="btn btn-sm btn-success" href="{{ route('appointment.status',['id'=>$data->id, 'status'=>'confirmed']) }}">Accepted</a>

                                {{-- <a class="btn btn-danger btn-sm" href="{{ route('appointment.force', $data->id) }}">Rejected</a> --}}


                            <td>
                                {{ $data->status }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Read All</button>
        </form>
        {{-- {{ $appointment->links() }} --}}

@endsection
