<!--start-single-->
<div class="single contact">
	<div class="container">
		<div class="single-main">
			<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
@if(isset($data) && is_object($data))					
						<div class="flexslider">
							<ul class="slides">
	@foreach($data as $data)



<li data-thumb = "/assets/images/{{ $data->sex  }}/{{ $data->alias }}/{{ $data->vendor_code }}/preview/{{ $data->image }}" >

<!-- <li data-thumb=" public/assets/images/man/armani/AR0431/preview/ar0431.jpg " >
						 -->						
						 <div class="thumb-image">			
{{ Html::image('assets/images/'.$data->sex.'/'. 
								$data->alias .'/'.
								$data->vendor_code.'/preview/'.
								$data->image,'preview',
								['class'=>'img-responsive', 'data-imagezoom'=>'true',] 
				) 
}}  	
						</div>
</li>	
									
	@endforeach							
							</ul>
						</div>



										<li data-thumb = "{{ $data->sex  }}/{{ $data->alias }}/{{ $data->vendor_code }}/preview/{{ $data->image }}" >

											<!-- <li data-thumb=" public/assets/images/man/armani/AR0431/preview/ar0431.jpg " >
                                                                     -->
											<div class="thumb-image">
												{{ Html::image('assets/images/'.$data->sex.'/'.
                                                                                $data->alias .'/'.
                                                                                $data->vendor_code.'/preview/'.
                                                                                $data->image,'preview',
                                                                                ['class'=>'img-responsive', 'data-imagezoom'=>'true',]
                                                                )
                                                }}
											</div>
										</li>



								@endforeach
								</ul>

					</div><div>
								<img src="{{asset('assets/images/man/armani/ar0431/preview/ar0431.jpg')}}">
							</div>
				</div>

				<div class="col-md-7 single-top-right">
					<div class="single-para simpleCart_shelfItem">

						<h2>{{ $data->alias }}</h2>
						<h3>{!! $data->title !!}</h3>
						<div class="star-on">
							<ul class="star-footer">
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
							</ul>
							<div class="review">
								<a href="#"> 1 customer review </a>

							</div>
							<div class="clearfix"> </div>
						</div>

						<h5 class="item_price"><h2>{{ $data->price }} грн.</h2></h5>

						<ul class="tag-men">
							<li><span>Наличие</span>
								@if($data->status == 0 )
									<span class="women1">: Нет в наличии</span></li>
							@endif
							@if($data->status == 1 )
								<span class="women1">: Ожидается</span></li>
							@endif
							@if($data->status == 2 )
								<span class="women1">: Есть на складе</span></li>
							@endif

						</ul>

						@if($data->status == 0 || $data->status == 1)
							<a class ="btn btn-default btn-xl p_a2c" style="opacity:0.5;" href="#">Добавить в корзину</a>
						@else
							<a class ="btn btn-default btn-xl p_a2c" href="{{ route('cart.edit', $data->id) }}">Добавить в корзину</a>
					@endif

					<!-- <form action="" method='post' class='buy_btn'>
								<input type="hidden" value="" name="watch_id">
								<input type="submit" class="btn btn-default btn-xl p_a2c" value='Добавить в корзину'>
							</form> -->

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			@endif


			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 pull-left">
				<div id="p_desc_wrap" itemprop="description" style="width:100%">

					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Артикул:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val" itemprop="sku">{{ $data->vendor_code }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Бренд:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val" itemprop="brand">{{ $data->alias }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Пол:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->sex }} </div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Страна бренда:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->brend_country }} </div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Гарантия:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->guarantee }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Серия:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->series }}</div>
					</div>
					{{--<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Страна производитель:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->brand_made }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Размеры:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->clock_size }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Календарь:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->calendar }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Подсветка:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->lighting }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Размер корпуса:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->body_size }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Ремешок:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->strap }} </div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Стекло:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->glas }} </div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Циферблат:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->clock_color }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Материал корпуса:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->body_material }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Механизм:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->mechanism }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Стиль:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->style }} </div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Тип механизма:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->mechanism_type }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Застежка:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->clasp }}</div>
					</div>
					<div class="p_param_wrap row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-4 p_param_name">Цвет ремешка:</div>
						<div class="col-xs-8 col-sm-9 col-md-9 col-lg-8 p_param_val">{{ $data->clasp_color }}</div>
					</div>--}}			</div>
			</div>
			<!-- <div class="latestproducts">
                <div class="product-one">
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div> -->
		</div>
		<!-- sidebar-start -->

		<!-- sidebar-end -->
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<!--end-single-->