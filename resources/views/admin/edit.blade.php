@extends('admin.layout.admin')

@section('content')

<h3>Редактировать товар</h3>

 <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form action="{{ route('product.update', $product->id) }}" method='post' id='edit_form'>
        <input name="_method" type="hidden" value="put">
        <input type="hidden" name='edit_form' value='{{ $product->id}}'>
           {{ csrf_field() }}
            <div class="form-group">
                <label for='vendor_code'>Артикул</label>
                <input type="text" class='form-control' name='vendor_code' value='@if(isset($product->vendor_code )) {{ $product->vendor_code }} @endif' required="">
            </div>

            <div class="form-group">
                <label for='title'>Название</label>
                <input type="text" class='form-control' name='title' value='@if(isset($product->title )) {{ $product->title }} @endif' required="">
            </div>

            <div class="form-group">
                 <label for='alias'>Бренд</label>
                <input type="text" class='form-control' name='alias' value='@if(isset($product->alias )) {{ $product->alias }} @endif' required="">
            </div>

             <div class="form-group">
                 <label for='price'>Цена</label>
                <input type="text" class='form-control' name='price' value='@if(isset($product->price )) {{ $product->price }} @endif' required="">
            </div>

            <div class="form-group">
                 <label for='file'>Изображение</label>
                <input type="file" class='form-control' name='file' value='@if(isset($product->title )) {{ $product->title }} @endif'>
            </div>

            <button type="submit" class='btn btn-default'>Обновить</button>
            </form>

        </div>
    </div>
    @endsection