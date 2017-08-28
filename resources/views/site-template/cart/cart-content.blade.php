<!--start-ckeckout-->
<div class="ckeckout">
	<div class="container">
	    <div class="ckeck-top heading">
			<h2>Корзина</h2>
		</div> 
<div class="ckeckout-top">
	<div class="cart-items">
		<h3>В корзине</h3>	          
			<table class="table">
					    <thead>
					      <tr>
					       
					        <th>Наименование</th>
					        <th>Количество</th>
					        <th>Цена</th>
					      </tr>
					    </thead>
					    <tbody>
					     
					@if($cartItems)	 
					
						@foreach($cartItems as $cartItem)
						
 							 <tr>
					        <td>{{ $cartItem->name }}</td>
					        <td>
{!! Form::open(['route' =>['cart.update', $cartItem->rowId ], 'method'=>'put']) !!}
 <input type="text" style="display:none" name="watch_id" id="watch_id"
                   value="{{$cartItem->id}} ">
                   <input type="number" name = "qnty" value="{{ $cartItem->qty }}" class ="qnty" style="width:10%;">
		<!-- <select name = "qnty" value="{{ $cartItem->qty }}" class ="qnty">
			    <option disabled>Выберите количество</option>
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    </select> -->
    	<input type="submit" class="btn btn-sm btn-default" value="Обновить">			
{!! Form::close() !!}</td>
					        <td>{{ $cartItem->price }}</td>
				<form action="{{ route('cart.destroy', [$cartItem->rowId ])}}"method="POST">

					{{ csrf_field() }}
					{{ method_field('DELETE') }}

					<td><input type="submit" class="btn btn-danger" value ="Удалить"></td>

				</form>

					      </tr>	
					    @endforeach

					@endif	

							<tr> 
							<td></td>
							<td><strong>Всего к оплате: </strong> {{ Cart::subtotal() }} <strong>грн.</strong></td>
							<td class="product_count"><strong>Товаров в корзине:</strong> {{ Cart::count() }} <strong>шт.</strong></td>
							</tr>	
					    </tbody>
					  </table>
    		</div>
		</div>

	<td><a href="{{ route('shipping')}}"><button type="button" class="btn btn-primary">Оформить заказ</button></a></td>	
	</div>
</div>
<!--end-ckeckout-->

