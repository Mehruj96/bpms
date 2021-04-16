@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">New Appointment</h3>
@endsection

@section('content')

    @if (session('mark_read'))
        {{ session('mark_read') }}
    @endif
    @if (session('no_mark_read'))
        {{ session('no_mark_read') }}
    @endif
    <div class="row">
        <form action="{{ route('appointment.markread') }}" method="post">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color:#9c27b0; color:white; font-weight:900">
                    <th scope="col">Mark</th>
                    <th scope="col">Serial No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Service</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointment as $data)
                        <tr>
                            <td>
                                <input type="checkbox" name="mark_read[]" value="{{ $data->id }}">
                            </td>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->service }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->appointment_date }}</td>
                            <td>{{ $data->appointment_time }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('appointment.delete', $data->id) }}">Mark as read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Read All</button>
        </form>
        {{-- {{ $appointment->links() }} --}}
    </div>

@endsection
