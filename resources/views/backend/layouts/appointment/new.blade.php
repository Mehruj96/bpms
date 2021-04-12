@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">New Appointment</h3>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr style="background-color:#9c27b0; color:white; font-weight:900">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Contact </th>
            <th scope="col">Appointment Date  </th>
            <th scope="col">Appointment Time </th>
            <th scope="col">Action  </th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th>1</th>
                <td>Otto</td>
                <td>@mdogdgstr</td>
                <td>@mdogdgstr</td>
                <td>@mdogdgstr</td>
                <td>
                <a class="btn btn-warning btn-sm" href="#">view</a>


                </td>
            </tr>
           
        </tbody>
    </table>

        








@endsection