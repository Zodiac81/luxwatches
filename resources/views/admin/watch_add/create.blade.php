@extends('admin.layout.admin')

@section('content')

<h3>Добавить продукт</h3>

 <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('vendor_code', 'Артикул') }}
                {{ Form::text('Артикул', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('alias', 'Бренд') }}
                {{ Form::text('alias', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>
            <div class="form-group">
                {{ Form::label('sex', 'Пол') }}
                {{ Form::text('sex', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('brend_country', 'Страна бренда') }}
                {{ Form::text('brend_country', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('guarantee', 'Гарантия') }}
                {{ Form::text('guarantee',  null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('series', 'Серия') }}
                {{ Form::text('series', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('brand_made', 'Страна производитель') }}
                {{ Form::text('brand_made',null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('clock_size', 'Размеры') }}
                {{ Form::text('clock_size', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('calendar', 'Календарь') }}
                {{ Form::text('calendar', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

              <div class="form-group">
                {{ Form::label('lighting', 'Подсветка') }}
                {{ Form::text('lighting', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('body_size', 'Размер корпуса') }}
                {{ Form::text('body_size',  null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('strap', 'Ремешок') }}
                {{ Form::text('strap',null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('glas', 'Стекло') }}
                {{ Form::text('glas', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('clock_color', 'Циферблат') }}
                {{ Form::text('clock_color', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('body_material', 'Материал корпуса') }}
                {{ Form::text('body_material', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

             <div class="form-group">
                {{ Form::label('mechanism', 'Механизм') }}
                {{ Form::text('mechanism', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('style', 'Стиль') }}
                {{ Form::text('style', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('mechanism_type', 'Тип механизма') }}
                {{ Form::text('mechanism_type', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('clasp', 'Застежка') }}
                {{ Form::text('clasp', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
            </div>

            <div class="form-group">
                {{ Form::label('clasp_color', 'Цвет ремешка') }}
                {{ Form::text('clasp_color', null, ['class' => 'form-control','required'=>'','minlength'=>'5']) }}
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