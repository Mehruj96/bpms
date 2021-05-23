@extends('frontend.master')

@section('appointment')
menu-active
@endsection

@section('content')

<!--==========================
      Contact Section
    ============================-->
<section id="contact" class="wow fadeInUp sec-padding">

    <div class="container">
        <div class="row contact-info">
            <div class="col-lg-6 m-auto">

                @if (session('appointment_info'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong class="text-succes">{{ session('appointment_info') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div><br>
                @endif

                <div class="section-header">
                    <h2>Make an Appointment</h2>
                </div>
                <div class="form">
                    <!-- Form itself -->
                    <form action="{{ route('appointment.make',$service->id) }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name"/>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email"/>
                            </div>
{{-- @dd($appointment)
     --}}
                            <div class="form-group">
                                <input type="hidden" name="service_id">

                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter Phone Number"/>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" name="appointment_date" id="appointment_date" placeholder="Appointment Date"/>
                            </div>
                            {{-- <div class="form-group">
                                <select type="time" class="form-control" value="{{ date(' h:i') }}" min="{{ date('h:i ') }}"name="appointment_time" id="appointment_time" placeholder="Appointment Time"/>
                            </div> --}}
                            <div class="form-group">
                                <label for="slot_id">Appointment Time</label>
                                <select class="form-control" name="slot_id" id="slot_id">
                                    @foreach($slots as $data)
                                    <option value="{{$data->id}}">{{ optional($data->from_time)->format('h:i:s A')}}-{{ optional($data->to_time)->format('h:i:s A')}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div id="success"> </div> <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Make an Appointment</button><br/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section><!-- #contact -->


@endsection
