@extends('admin.layout.admin')
@section('content')
    <h3>Заказы</h3>

    <ol>
    	@foreach($orders as $order)
    		<li><hr>
    			<h5 class="order-info">
    			Дата\Время: {{ $order->created_at }} <br>
    			Покупатель: {{ $order->user->name }} <br> 
    			Всего(грн): {{ $order->total }}
    			</h5>

          <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                    {{csrf_field()}}
              <label for="delivered">Отправленно</label>
              <input type="checkbox" value="1" name="delivered" {{ $order->delivered == 1?"checked":"" }}>
                <input type="submit" value="Ок">
          </form> 
  
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