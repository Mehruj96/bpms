@extends('backend.master')

@section('title')

<h3 class="font-weight-bold">Dashboard</h3>

@endsection

@section('dashboard-content')
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Total Customer</b>
                  <div class="card-icon">
                    @isset($total_customer)
                        {{ $total_customer }}
                    @endisset
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Total Appointment</b>
                  <div class="card-icon">
                    98
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Total Accepted Apt</b>
                  <div class="card-icon">
                    98
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Total Rejected Apt</b>
                  <div class="card-icon">
                    52
                  </div>
                </div>
              </div>
            </div> --}}

          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Today Sales</b>
                  <div class="card-icon">
                    52
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Yesterday Sales</b>
                  <div class="card-icon">
                    52
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Last Sevendays Sale</b>
                  <div class="card-icon">
                    5220
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold">Total Sales</b>
                  <div class="card-icon">
                    52
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 m-auto">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon m-4">
                  <b class="card-category text-dark font-weight-bold"> Total Service</b>
                  <div class="card-icon">
                    @isset($total_services)
                        {{ $total_services }}
                    @endisset
                    {{-- {{ $total_services }} --}}
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
