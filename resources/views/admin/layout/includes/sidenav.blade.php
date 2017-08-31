{{-- Side Navigation --}}
<div class="col-md-3">
    <div class="sidebar content-box" style="display: block; min-height: 188px;">
        <ul class="nav">
            <!-- Main menu -->
            <li style="font-family: cursive" class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Панель администратора</a>
            </li>
            <li class="submenu">
                <a style="font-family: cursive" href="#">
                    <i class="glyphicon glyphicon-list"></i> Продукция
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
					<li>
						<a style="font-family: cursive" class='glyphicon glyphicon-list-alt' style="padding-left: 33px;" href="{{route('product.index')}}">Список товаров
						</a>
					</li>
                    <li>
						<a style="font-family: cursive" class='glyphicon glyphicon-plus' style="padding-left: 33px;" href="{{route('product.create')}}">Добавить товар
						</a>
					</li>
                    
                </ul>
            </li>
            <li class="submenu">
                <a style="font-family: cursive" href="#">
                    <i class="glyphicon glyphicon-list"></i> Заказы
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a style="font-family: cursive" href="{{url('admin/orders/pending')}}">Ожидающие отправки</a></li>
                    <li><a style="font-family: cursive" href="{{url('admin/orders/delivered')}}">Отправленные</a></li>
                    <li><a style="font-family: cursive" href="{{url('admin/orders')}}">Все заказы</a></li>
                </ul>
            </li>
			 <li>
                <a style="font-family: cursive" href="{{route('message.index')}}">
                    <i class="glyphicon glyphicon-envelope"></i> Сообщения от пользователей <br>
                </a>
                 {{--Новых <span class="badge"></span>--}}
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->