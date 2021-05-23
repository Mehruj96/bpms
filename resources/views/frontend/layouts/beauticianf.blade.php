@extends('frontend.master')

@section('beautician')
menu-active
@endsection

@section('content')

<!--==========================
      Our Team Section
    ============================-->
<section id="team" class="wow fadeInUp sec-padding">
    <div class="container">
        <div class="section-header">
            <h2>Beauticians</h2>
        </div>
        <div class="row">
            @foreach ($beautician as $data)
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic">
                            <img height="250" width="250" src="{{ url('/uploads/beautician/'.$data->beautician_image) }}" alt="">
                        </div>
                        <div class="details">
                            <h4>{{ $data->beautician_name }}</h4>
                            {{-- <span>Phone: {{ $data->beautician_number }}</span> --}}
                            <a href="{{ route('beautician.view',$data->id) }}"class="btn btn-primary">View</button><br/></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section><!-- #team -->



@endsection
