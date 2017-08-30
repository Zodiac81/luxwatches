@foreach($items as $item)
		
		<li class="grid"><a href="{{ $item->url() }}">{{ $item->title }}</a>

		@if($item->hasChildren())

		<div class="mepanel">
			<div class="row">
			  	<div class="col1 me-one">
					<ul>
					
			@include('site-template.menu.customMenuItems',['items'=>$item->children()])
					
					</ul>
				</div>
			</div>
		</div>	

		@endif
</li>
@endforeach