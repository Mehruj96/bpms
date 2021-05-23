@extends('frontend.master')

@section('about')
menu-active
@endsection

@section('content')


<!--==========================
      About Section
    ============================-->
<section id="about" class="wow fadeInUp sec-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="white">About Us</h2>
        </div>
        <div class="row">
        @foreach ($about as $data)
        <div class="col-lg-6 about-img">
            <img src="{{ url('/uploads/about/', $data->about_image) }}" alt="">
        </div>
        <div class="col-lg-6 content">
            <h3>{{ $data->about_info }}</h3>
        </div>
        @endforeach
        </div>

    </div>
</section><!-- #about -->

@endsection
