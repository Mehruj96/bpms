@extends('frontend.master')

@section('content')

<!--==========================
      Services Section
    ============================-->
<section id="services" class="sec-padding">
    <div class="container">
        <div class="section-header">
            <h2>Our Services</h2>
        </div>
        {{-- @dd($services) --}}
        <div class="row">
            @foreach ($services as $data)
            <div class="col-lg-4">
                <div class="card wow fadeInLeft" style="width: 18rem;">
                    <img height="200px" width="200px" src="{{url('/uploads/service/'.$data->image)}}" alt="" class="card-img-top">
                    {{-- <img width="200px;" height="200px;" src="{{url('/uploads/product/'.$data->image)}}" alt=""> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->service_name }}</h5>
                        <h6 class="card-title">{{ $data->service_price }}</h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

</section><!-- #services -->
<!--==========================


@endsection
