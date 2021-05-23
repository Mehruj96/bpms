@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">About us</h3>
@endsection

@section('content')

<table class="table table-bordered">
    <thead>
        <tr style="background-color:#9c27b0; color:white; font-weight:900">
            <th scope="col">Info</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($about as $data)
        <tr>
            <td style="max-width: 400px; padding: 20px;">{{ $data->about_info }}</td>
            <td>
                <img height="100" width="100" src="{{ url('/uploads/about/', $data->about_image) }}" alt="About Image">
            </td>
            <td>
                <a class="btn btn-danger" href="{{ route('aboutus.delete', $data->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
