@extends('backend.master')


@section('title')
<h3 class="font-weight-bold">Invoice</h3>
@endsection


@section('content')

{{-- Invoice --}}



<div class="container bootstrap snippets bootdeys" id="printArea">
<div class="row">
  <div class="col-sm-6 mx-auto border py-5 px-5 rounded">
	  	<div class="panel panel-default invoice" id="invoice">
		  <div class="panel-body">
			<div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div>
		    <div class="row">

				<div class="col-sm-6 top-left">
					<i class="fa fa-rocket"></i>
				</div>
				<div class="col-sm-6 top-right">
						<h3 class="marginright">INVOICE-{{ $invoice->invoice_no }}</h3>
						<span class="marginright">{{ optional($invoice->sales_date)->format('Y-m-d h:i:s A')}}</span>
			    </div>

			</div>
			<hr>
			<div class="row justify-content-between">

				<div class="col-xs-15 from">
					<p class="lead marginbottom">From :Beauty Parlor</p>
					<p>Uttara</p>

				</div>


				<div class="col-xs-15 to">
					<p class="lead marginbottom">To : {{ $invoice->name }}</p>
					<p>Contact: {{ $invoice->contact }}</p>
					<p>Email:   {{ $invoice->email }}</p>

			    </div>

			    {{-- <div class="col-xs-4 text-right payment-details">
					<p class="lead marginbottom payment-info">Payment details</p>
					<p>Date: 14 April 2014</p>
					<p>VAT: DK888-777 </p>
					<p>Total Amount: $1019</p>
					<p>Account Name: Flatter</p>
			    </div> --}}

			</div>
            <hr>

			<div class="row table-row">
				<table class="table table-striped table-bordered">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">#</th>
			          <th style="width:50%">Service Name</th>
			          <th class="text-right" style="width:15%">Qty</th>
			          <th class="text-right" style="width:15%">Service Price</th>
			          <th class="text-right" style="width:15%">Sub Total</th>
			        </tr>
			      </thead>

			      <tbody>
                      @foreach ($invoice->bookingDetails as $key=>$invoiceLine)
                <tr>
			          <td class="text-center">{{ $key + 1 }}</td>
			          <td>{{ $invoiceLine->bookingService->service_name }}</td>
                      {{-- @dd($invoice->appointmentBooking->service_quantity) --}}
			          <td class="text-right">{{ $invoiceLine->service_quantity }}</td>

                       <td class="text-right">{{ $invoiceLine->service_price }}</td>
			          <td class="text-right">{{ $invoiceLine->service_quantity * $invoiceLine->service_price }}</td>


			        </tr>
                    @endforeach
			       </tbody>
			    </table>

			</div>

			<div class="row justify-content-between">
			<div class="col-xs-6 margintop">
				<p class="lead marginbottom">THANK YOU!</p>

				<button type="button"  class="btn btn-success printButton"> Print Invoice</button>


				{{-- <button class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</button> --}}
			</div>
			<div class="col-xs-6 text-right pull-right invoice-total">
					  {{-- <p>Subtotal : $1019</p>
			          <p>Discount (10%) : $101 </p>
			          <p>VAT (8%) : $73 </p> --}}
			          <p>Total :  <td class="text-right">{{ $total}}</td> </p>
                      <p>Payed Amount :  <td class="text-right">{{ $invoice->paid_amount }}</td> </p>
                      <p>Due Amount :  <td class="text-right">{{ $total - $invoice->paid_amount }}</td> </p>
			</div>
			</div>

		  </div>
		</div>
	</div>
</div>
</div>
</div>
</div>



@endsection

@push('js')

<script>


  <script>

@endpush
