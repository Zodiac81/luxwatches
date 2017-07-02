
<div class="col-md-3 single-right">
			<div class="w_sidebar">
				<section  class="sky-form">
					<h4>Категории</h4>
					<div class="row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Все</label>
						</div>
						<div class="col col-4">								
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Мужские</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Женские</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Детские</label>			
						</div>
					</div>
				</section>
				<section  class="sky-form">
					<h4>Бренд</h4>
					<div class="row1 row2 scroll-pane">
						<div class="col col-4">

				@if($filters)	

					
						@foreach($filters as $k=>$filter)
							

							

							   <label class="checkbox filter-button"><input type="checkbox" name="{{ $filter }}" checked="" data-filter="{{ $filter }}"><i></i>{{ $filter }}</label>
	
						@endforeach	
				@endif				
						</div>
					</div>
				</section>
				<section class="sky-form">
					<h4>discount</h4>
					<div class="row1 row2 scroll-pane">
						<div class="col col-4">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
							<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
							<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
						</div>
						<div class="col col-4">
							<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
							<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
							<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
						</div>
					</div>						
				</section>
	</div>
</div>
			