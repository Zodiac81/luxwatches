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
    <hr>

<h2 style="font-family: cursive">Оплата</h2>

    <div class="row">
    
    
        <div class="col-md-12">
        <form action="{{ route('storePayment') }}" method="POST" id="payment-form">
            {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="poste">Номер карты (16 цифр без пробелов)</label>
                            <div class="col-sm-7">
                                <input type="text" placeholder="Номер карты" class="form-control" id="cart" name="cart" required pattern="[0-9]{16}"/>
                            </div>

                        </div>
            <br>
            <br>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="poste">CVV2 (3 цифры)</label>
                            <div class="col-sm-7">
                                <input type="password" placeholder="CVV2" class="form-control" id="cvv" name="cvv" required pattern="[0-9]{3}" max="3"/>
                            </div>

                        </div>

            <div class="form-group">
                <label class="control-label col-sm-5" for="poste">Срок действия банковской карты (до)</label>
                <div class="col-sm-7">
                    <input type="number" min="1" placeholder="мм" class="form-control" required pattern="[0-9]{2}" max="12" style="width: 60px;float:left;margin-right: 5px"/>
                    <strong style="float:left;margin-right:5px;font-size: 30px">/</strong>
                    <input type="number" min="17" placeholder="гг" class="form-control" required pattern="[0-9]{2}" max="99" style="width: 60px;"/>
                </div>

            </div>
		<div class="form-group text-right">
			<a href='{{url()->previous()}}' class='btn btn-default'>Назад</a>
			{{ Form::submit('К оплате',['class' => 'btn btn-primary']) }}
		</div>
            
        </form>
            <hr>
        </div>
    </div>

@endsection


@section('footer')
	@include('site-template.footer')
@endsection