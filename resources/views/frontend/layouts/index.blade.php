@extends('frontend.master')

@section('home')
menu-active
@endsection

@section('content')

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show m-auto col-6" role="alert">
    <strong class="text-succes">{{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div><br>
@endif

  <section id="intro">

    <div class="intro-content">
      <h2><span>Get Preety Look</span><br>Hair & Skin care</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">OFFERS</a>
      </div>
    </div>
    <div class="item" style="background-image: url('frontend/img/intro-carousel/1.jpg');"></div>
  </section><!-- #intro -->

  <main id="main">

{{--  price --}}
    {{-- <section id="price" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Price List</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-default">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						All in One
					</h3>
					<p>
						$ 69
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Hair Styling
					</h3>
					<p>
						$ 150
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Face Cleanup
					</h3>
					<p>
						$ 250
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Makeup Pack
					</h3>
					<p>
						$99
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-warning">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Hands & Legs
					</h3>
					<p>
						$ 19
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-danger">
				<div class="shape">
					<div class="shape-text">
						top
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Face Pack
					</h3>
					<p>
						$ 9
					</p>
				</div>
			</div>
		</div>
	</div>

      </div>
    </section><!-- #clients --> --}}

  </main>

@endsection
