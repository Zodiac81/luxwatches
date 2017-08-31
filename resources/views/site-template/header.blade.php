<!--top-header-->

	<div class="top-header">
		<div class="container">
		<div class="row">
			<div class="top-header-main">
				 <div class="col-md-2 top-header-left">
                    <a href="{{ route('home')}}">
                            <img style="width:30%;" src ="{{ asset('assets/images/white-watch-512.png') }}">
                                    </a>
                                </div>  
			<div class="col-md-8 top-header-left">
				<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Войти</a></li>
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                    @else
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->login }} 
                                    <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu" role="menu">
								@if(Auth::user()->login == 'Admin')
									 <li>
                                        <a href="{{ route('admin.index') }}">Админпанель</a>
									</li>
                                    <li>
                                        <a href="{{route('logout')}}">Выйти</a>
                                    </li>
                                @endif
                                <li>
                                        <a href="{{route('user_orders')}}"> Личный кабинет</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                  </div><div class="clearfix"></div>  
                </div>
                
				<div class="col-md-2 top-header-left">
					<div class="cart box_1">
						<a href="{{ route('cart.index') }}">
							 <div class="total">
								{{ Cart::subtotal() }} &#8372;
                              </div>
								<img src="{{asset('assets/images/cart-1.png')}}" alt="" />
						</a>
                        <span class=" badge">{{ Cart::count() }}</span>
						<div class="clearfix"></div>
					</div>
				</div>
				 <div class="clearfix"></div> 
			</div>
			</div>
		</div>
	</div>
	@include('layouts.messages')
	<!--top-header-->
