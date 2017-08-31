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

<h2 style="font-family:cursive; ">Адрес доставки</h2>

<div class="row">
    <div class="col-md-6 col-md-offset-5">
                {!! Form::open(['route'=>'address.store','method'=>'post',]) !!}

            <div class="form-group">
                {{ Form::label('name','Ф.И.О.') }}<br>
                {{ Form::text('name',null, ['class' => 'col-xs-4']) }}
            </div>

             <div class="form-group">
                {{ Form::label('street','Улица') }}<br>
                {{ Form::text('street',null, ['class' => 'col-xs-4']) }}
            </div>

            <div class="form-group">
                {{ Form::label('house','Номер дома') }}<br>
				<input type='number' min='1' class='col-xs-4' name='house'>
               
            </div>

             <div class="form-group">
                {{ Form::label('flat','Номер квартиры') }}<br>
                <input type='number' min='1' class='col-xs-4' name='flat'>
            </div>

            <div class="form-group">
                {{ Form::label('city','Город') }}<br>
                {{ Form::text('city',null, ['class' => 'col-xs-4']) }}
            </div>

             <div class="form-group">
                {{ Form::label('state','Область') }}<br>
                {{ Form::text('state',null, ['class' => 'col-xs-4']) }}
            </div>

             <div class="form-group">
                {{ Form::label('zip','Индекс') }}<br>
                <input type='number' min='0' max='5' class='col-xs-4' name='flat'>
            </div>

            <div class="form-group">
                {{ Form::label('country','Страна') }}<br>
                {{ Form::select('country', ['UA' => 'Украина'] ) }}
            </div>

<div class="form-group text-right">
        <a href='{{url()->previous()}}' class='btn btn-default'>Назад</a>
		{{ Form::submit('К оплате',['class' => 'btn btn-primary']) }}
    </div>
            


        {!! Form::close() !!}
    </div>
    
</div>

                         
@endsection


@section('footer')
	@include('site-template.footer')
@endsection