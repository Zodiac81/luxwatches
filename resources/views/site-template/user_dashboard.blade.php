@extends('layouts.main')
@section('content')
    <h3 style="font-family:cursive;">Ваши заказы </h3>

    <ol>
    	@foreach($userOrdersList as $order)
    		<li><hr>
    			<h5 class="order-info">
    			Дата покупки: {{ $order->created_at }} <br>
    			Всего(грн): {{ $order->total }}
    			</h5>

               <table class="table table-bordered">
                   <tr>
                       <th>Название</th>
                       <th>Количество</th>
                       <th>Цена</th>
                   </tr>
                   @foreach($order->orderItems as $item)
                       <tr>
                           <td>{{$item->title}}</td>
                           <td>{{$item->pivot->quantity}}</td>
                           <td>{{$item->pivot->total}}</td>
                       </tr>
               
                   @endforeach
               </table>
                           </li>
                   	 
    	@endforeach
    </ol>
	<div class="form-group text-right">
        <a href='{{url()->previous()}}' class='btn btn-default'>Назад</a>
    </div>
@endsection