@extends('admin.layout.admin')

@section('content')

<h3>Добавить продукт</h3>

 <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <div class="form-group">
                {{ Form::label('vendor_code', 'Артикул') }}
                {{ Form::text('vendor_code', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('name', 'Название') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('alias', 'Бренд') }}
                {{ Form::text('alias', null, ['class' => 'form-control']) }}
            </div>

             <div class="form-group">
                {{ Form::label('price', 'Цена') }}
                {{ Form::text('price', null, ['class' => 'form-control']) }}
            </div>

           
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Добавить', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection