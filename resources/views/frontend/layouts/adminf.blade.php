@extends('frontend.master')

@section('content')

<!--==========================
      Contact Section
    ============================-->
<section id="contact" class="wow fadeInUp sec-padding">

    <div class="container">
        <div class="row contact-info">
            <div class="col-lg-6 m-auto">

                {{-- @if (session('appointment_info'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong class="text-succes">{{ session('appointment_info') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div><br>
                @endif --}}

                <div class="section-header">
                    <h2>Admin Log in</h2>
                </div>
                <div class="form">
                    <!-- Form itself -->
                    <form action="{{ route('appointment.make') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password"/>
                            </div>

                            <div id="success"> </div> <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Login</button><br/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</section><!-- #contact -->


@endsection
