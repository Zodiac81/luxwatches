<div class="col-md-9 prdt-left">
		@if(isset($data))  
			@foreach($data as $k=>$single_item)
				@if($k==0 || $k%3 == 0)
					<div class="product-one"> 
				@endif

					<div class="col-md-4 product-left p-left">
						<div class="product-main simpleCart_shelfItem each-item">
							<a href="{{ route('single_item', ['id' =>$single_item->id]) }}"   class="mask">

							 
							  
{{ Html::image('assets/images/'.$single_item->sex.'/'. $single_item->alias .'/'.$single_item->vendor_code.'/thm/'. $single_item->image,'alt=',['class'=>'img-responsive zoom-img']) }}</a>


				<div class="product-bottom">
					<h3>{{$single_item->alias}}</h3>
					<h6>{!!$single_item->title!!}</h6>
					<h4><a class="item_add" href="#"><i></i></a> 
					<span class=" item_price">{{$single_item->price}}</span></h4>
					<div class=" status-{{$single_item->status}} status"></div>	
				</div>
						@if( $single_item->discount > null)
						<div class="srch srch1">
								<span>{{ $single_item->discount }}</span>
						</div>
						@endif
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
 
	<!-- product-end -->