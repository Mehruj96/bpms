@extends('backend.master')

@section('title')
<h3 class="font-weight-bold">Beauticians</h3>
@endsection

@section('content')

<table class="table table-bordered">
    <thead>
        <tr style="background-color:#9c27b0; color:white; font-weight:900">
        <th scope="col">#</th>
        <th scope="col">Beautician_Id</th>
        <th scope="col">Name</th>
        <th scope="col">Contact </th>
        <th scope="col">Address  </th>
        <th scope="col">Image  </th>
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
            <td>@mdogdgstr</td>
            <td>
            <a class="btn btn-info btn-sm" href="#">Edit</a>
            <a class="btn btn-danger btn-sm" href="#">Delete</a>
            </td>
        </tr>

    </tbody>
</table>
<a class="btn btn-success btn-sm" href="#">Added Beautician</a>




@endsection
