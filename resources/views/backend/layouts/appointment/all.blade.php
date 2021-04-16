@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">All Appointment</h3>
@endsection

@section('content')

    @if (session('mark_delete'))
        {{ session('mark_delete') }}
    @endif
    @if (session('no_mark_delete'))
        {{ session('no_mark_delete') }}
    @endif

    <div>
        <form action="{{ route('appointment.markdelete') }}" method="post">
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
                                <input type="checkbox" name="mark_delete[]" value="{{ $data->id }}">
                            </td>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->service }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->appointment_date }}</td>
                            <td>{{ $data->appointment_time }}</td>
                            <td>

                                <a class="btn btn-info btn-sm" href="{{ route('appointment.unread', $data->id) }}">Unread</a>
                                <a class="btn btn-danger btn-sm" href="{{ route('appointment.force', $data->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <button type="submit" class="btn btn-danger">Delete All</button> --}}
        </form>
        {{-- {{ $appointment->links() }} --}}
    </div>















@endsection
