@extends('backend.master')
@section('title')
<div class="row d-flex justify-content-between">
    <div class="col-6">
        <h3 class="font-weight-bold">User Profiles</h3>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
         <form action="{{ route('profile') }}" method="get">
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
                          <a class="btn btn-info btn-sm" href="{{ route('profile') }}">Reset</a>
                      </div>
                </div>
            </div>
          </form>

        </div>
    </div>
<table class="table table-bordered ">

  <thead>
    <tr style="background-color:#9c27b0; color:white; font-weight:900">
      <th scope="col">Seriel No</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach( $user_list as $key=>$data)
    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $data->name}}</td>
      <td>{{ $data->email}}</td>
      <td>{{ $data->contact}}</td>
      <td>{{ $data->address}}</td>
      <td>
        <a class="btn btn-danger btn-sm" href="{{ route('profile.delete', $data->id) }}">Delete</a>
      </td>
    </tr>

    @endforeach
   </tbody>
   </table>



   {{-- {{ $customers->links() }} --}}


@endsection
