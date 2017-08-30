<hr>
<div class="col-md-12 prdt-left">

	<h2 >
		<p class='text-left' style="font-family: cursive">Хиты продаж</p>
	</h2>

		@if(isset($products))  

			@foreach($products as $k=>$single_item)
				@if($k==0 || $k%3 == 0)
					<div class="product-one"> 
				@endif
				<div class="col-md-4 product-left p-left">
					<div class="product-main simpleCart_shelfItem each-item">
						<a href="{{ route('single_item', ['id' =>$single_item->id]) }}"   class="mask">
{{ Html::image('assets/images/'.$single_item->sex.'/'. $single_item->alias .'/'.$single_item->vendor_code.'/thm/'. $single_item->vendor_code.'_thm.jpg','alt=',['class'=>'img-responsive zoom-img']) }}
						</a>
						<div class="product-bottom">
							<h3>{{$single_item->alias}}</h3>
							<h6>{!!$single_item->title!!}</h6>
							@if( $single_item->discount > null)
								<?php   $discount = floor(($single_item->price/100)*$single_item->discount);?>
								<h4>
									<i></i>
									<span class=" item_price" style="font-family: cursive"><strike>{{$single_item->price}}</strike> грн.</span><br>
									<span class=" item_price_disc" style="font-family: cursive">Новая цена {{ ($single_item->price)-$discount}} грн.</span>
								</h4>
								@else
									<h4>
										<i></i>
										<span class="item_price" style="font-family: cursive">{{$single_item->price}} грн.</span>
									</h4>
							@endif
							<div class=" status-{{$single_item->status}} status"></div>
							@if( $single_item->discount > null)
								<div class="srch srch1">
									<span>-{{ $single_item->discount }}%</span>
								</div>
							@endif
						</div>
					</div>
				</div>

					    @if(($k+1)%3 == 0)
              				<div class="clearfix"></div>
              			    </div>
              			@endif

			@endforeach
		@endif
	</div>
</div>	

		<div class="clearfix"></div>
		<hr>
 
	<!-- product-end -->

<style>

	h2, p, span
	{
		font-family: 'Cuprum', sans-serif;
	}

</style>