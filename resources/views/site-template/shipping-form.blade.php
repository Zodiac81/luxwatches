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

<h2>Адрес доставки</h2>

@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>

@endif

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
                {{ Form::text('house',null, ['class' => 'col-xs-4']) }}
            </div>

             <div class="form-group">
                {{ Form::label('flat','Номер квартиры') }}<br>
                {{ Form::text('flat',null, ['class' => 'col-xs-4']) }}
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
                {{ Form::text('zip',null, ['class' => '3']) }}
            </div>

            <div class="form-group">
                {{ Form::label('country','Страна') }}<br>
                {{ Form::select('country', ['UA' => 'Украина'] ) }}
            </div>


            {{ Form::submit('К оплате',['class' => 'btn btn-primary']) }}


        {!! Form::close() !!}
    </div>
    
</div>

                         
@endsection


@section('footer')
	@include('site-template.footer')
@endsection