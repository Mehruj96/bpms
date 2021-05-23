@extends('backend.master')


@section('title')
    <h3 class="font-weight-bold">Payment System</h3>
@endsection

@section('content')

    <form action="{{ route('sales.store',$id) }}" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Paid Amount</label>
            <input name="amount" type="integer" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Payment Type</label>

            <select name="payment_type" class="form-control" name="payment_type" id="" class="form-control">
            <option value="cash">cash</option>
            <option value="bkash">bkash</option>
        </select>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>




@endsection
