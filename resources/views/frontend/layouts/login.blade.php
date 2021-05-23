@extends('frontend.master')

@section('login')
menu-active
@endsection

@section('content')

@if (session('success'))
<div class="alert alert-info alert-dismissible fade show m-auto col-6" role="alert">
    <strong class="text-succes">{{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div><br>
@endif

{{-- @if ($errors->any())
<div class="alert alert-info alert-dismissible fade show m-auto col-6" role="alert">
    @foreach ($errors->any as $data)
    <strong class="text-succes">{{ $data }}</strong>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div><br>
@endif --}}

<section id="contact" class="wow fadeInUp sec-padding">
    <div class="container">
        <div class="row contact-info">
            <div class="col-lg-4 m-auto">
                <div class="section-header">
                    <h2>User Login</h2>
                </div>
                @if(session('message'))
                    <div class="alert alert-{{ session('type') }}">
                        <p class="text-center text-bolder text-dark">{{ session('message') }}</p>
                    </div>
                @endif
                <div class="form">
                    <form action="{{ route('user.doLogin') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" />
                                @error('email')
                                    <b class="text-danger">{{ $message }}</b>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password">
                                @error('password')
                                    <b class="text-danger">{{ $message }}</b>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-left">Login</button>
                                <a href="{{ route('user.register') }}" class="btn btn-info float-right">Sign up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
