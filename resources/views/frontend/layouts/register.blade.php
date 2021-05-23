@extends('frontend.master')

@section('login')
menu-active
@endsection

@section('content')

<section id="contact" class="wow fadeInUp sec-padding">
    <div class="container">
        <div class="row contact-info">
            <div class="col-lg-4 m-auto">

                <div class="section-header">
                    <h2>User Registration</h2>
                </div>
                <div class="form">
                    <form action="{{ route('user.doRegister') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter contact Number" />
                                @error('contact')
                                    <b class="text-danger">{{ $message }}</b>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address Here">
                            </div>
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
                            <button type="submit" class="btn btn-primary">Register</button><br />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
