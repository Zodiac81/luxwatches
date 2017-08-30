@if(Session::has('success'))

 <div class="alert alert-success" role="alert">
        <span> <strong>Success:</strong> {{ Session::get('success') }} &nbsp; <i class="fa fa-check-circle fa-2x pull-right" style="margin-top: -0.13em;" aria-hidden="true"></i></span>
 </div>

@endif

@if(Session::has('alert'))

 <div class="alert alert-danger" role="alert">
        <span> <strong>Alert:</strong> {{ Session::get('alert') }} &nbsp; <i class="fa fa-check-circle fa-2x pull-right" style="margin-top: -0.13em;" aria-hidden="true"></i></span>
 </div>

@endif

@if(count($errors) > 0)
    
     <div class="alert alert-danger" role="alert">
       <strong>Error:</strong>
       <ul>
       @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
       @endforeach
       </ul>
     </div>

@endif