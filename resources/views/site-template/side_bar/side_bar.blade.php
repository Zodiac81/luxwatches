
<div class="col-md-3 single-right">
	<div class="w_sidebar">
		<section  class="sky-form">
			<h4>Категории</h4>
				<div class="row1 scroll-pane" style="min-height: 175px;">
					<div id="category_filter" class="col col-4">

							@foreach($categories as $category)
								<label class="checkbox">
									<input type="checkbox" name="checkbox" data-category="{{$category}}"><i></i>{{$category}}
								</label>
							@endforeach
					</div>
				</div>
		</section>
		<section  class="sky-form">
			<h4>Бренд</h4>
				<div class="row1 row2 scroll-pane">
					<div class="col col-4">
						@if($filters)
							@foreach($filters as $k=>$filter)
							   <label class="checkbox filter-button">
								   <input type="checkbox" name="{{ $filter }}"  data-filter="{{ $filter }}"><i></i>{{ $filter }}
							   </label>
							@endforeach
						@endif
					</div>
				</div>
		</section>
	</div>
</div>
			