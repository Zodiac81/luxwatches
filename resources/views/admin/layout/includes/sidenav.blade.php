{{-- Side Navigation --}}
<div class="col-md-3">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Панель администратора</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Продукция
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
					<li>
						<a class='glyphicon glyphicon-list-alt' style="padding-left: 33px;" href="{{route('product.index')}}">Список товаров
						</a>
					</li>
                    <li>
						<a class='glyphicon glyphicon-plus' style="padding-left: 33px;" href="{{route('product.create')}}">Добавить товар
						</a>
					</li>
                    
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Заказы
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Ожидающие отправки</a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Отправленные</a></li>
                    <li><a href="{{url('admin/orders')}}">Все заказы</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->