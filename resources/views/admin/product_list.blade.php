@extends('admin.layout.admin')
@section('content')

<h3>Список товаров</h3>
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 table-responsive">
          <table class="table table-striped text-center" id="tbproduct" name="tbproduct">
            <thead>
            <th>№</th>
            <th>Артикул</th>
            <th>Название</th>
            <th>Бренд</th>
            <th>Цена</th>
            
            <th>Редактировать\Удалить</th>
            </thead>
            <tbody>
            @if(isset($products))
            <?php $counter = 1; ?>
                @foreach($products as $product)

                    <tr id="{{ $product->id }}">
                    	<th>{{  $product->id }} </th>
                        <th>{{ $product->vendor_code }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->alias }}</td>
                        <td>{{ $product->price }}</td>
                       
                        <td class="text-center">
                       
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info" style="margin-right: 10%;"><i class="glyphicon glyphicon-edit"></i></a>


                        <a class="btn btn-danger form-delete" href="{{ route('product.destroy', $product->id) }}"> <i class="glyphicon glyphicon-trash"></i></a>
                               
                               
                            </td>
                                <?php $counter++; ?>
                    </tr>

                @endforeach

            @endif
            </tbody>
           </table>
    	</div>
    </div>
</div>
  <div id="confirm" class="modal fade">
    		<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title alert alert-danger">Удалить выбранный товар?</h4>
            </div>
            <div class="modal-body">
           
            	<button type="button" id='delete-btn' class="btn btn-default">Да</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
           
            
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    	</div>	 
    	
    	
@endsection