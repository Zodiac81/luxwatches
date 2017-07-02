@extends('layouts.main')

@section('header')
	@include('site-template.header')
@endsection

@section('menu')
	@include('site-template.menu')
@endsection

@section('breadcrumbs')
	@include('site-template.breadcrumbs')
@endsection 

@section('content')

<h2>Метод оплаты</h2>

    <div class="row">
    
    
        <div class="col-md-6">
        <form action="{{ route('storePayment') }}" method="POST" id="payment-form">
            {{csrf_field()}}
            <span id="payment-errors"></span>
<strong>Card Number</strong></span> 
            <div class="card-num">
                <label>
                   
                   
                </label>
            </div>


            <input type="submit" class="button btn btn-primary payment-btn" value="Оплатить">
        </form>
        </div>
    </div>

<script src="{{asset('assets/js/payment.js')}}"></script>


@endsection


@section('footer')
	@include('site-template.footer')
@endsection