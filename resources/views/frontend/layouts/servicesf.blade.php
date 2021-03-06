@extends('frontend.master')

@section('service')
menu-active
@endsection

@section('content')

<!--==========================
      Services Section
    ============================-->
<section id="services" class="sec-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="text-white">Our Services</h2>
        </div>
        {{-- @dd($services) --}}
        <div class="row">
            @foreach ($services as $data)
            <div class="col-lg-4">
                <div class="card wow fadeInLeft" style="width: 18rem;">
                    <a href="{{ route('services.view',$data->id) }}">
                        <img height="250px" width="200px" src="{{url('/uploads/service/'.$data->image)}}" alt="" class="card-img-top">
                    </a>

                    {{-- <img width="200px;" height="200px;" src="{{url('/uploads/product/'.$data->image)}}" alt=""> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->service_name }}</h5>
                        <h6 class="card-title">{{ $data->service_price }}</h6>

                       <div class="d-flex justify-content-between" style="align-items: center">
                           <div>
                            <a href="{{ route('services.view',$data->id) }}"class="btn btn-primary">View</button><br/></a>


                           </div>
                           <div>
                            <a class="btn btn-danger btn-sm" href="{{ route('servicecart',$data->id) }}">Added Service</a>

                           </div>
                       </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

</section><!-- #services -->
<!--==========================


@endsection
