@extends('admin.layout.admin')
@section('content')

<h3>Сообщения</h3>
<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 table-responsive">
		
          <table class="table table-striped text-center" id="tbmessage" name="tbmessage" data-toggle="dataTable" >
            <thead>
            <th>№</th>
            <th>От</th>
            <th>Email</th>
			<th>Дата</th>
			<th>Удалить</th>
            </thead>
            <tbody>
            @if(isset($messages))
            <?php $counter = 1; ?>
                @foreach($messages as $message)
                    
                    <tr style="cursor:pointer;">
					
                    	<th>{{ $counter }} </th>
                        <th class="readMessage">{{ $message->user_name }}</th>
                        <td class="readMessage">{{ $message->email }}</td>
						<td class="readMessage">{{ $message->created_at }}</td>
						<td>
							<form action="{{ route('message_destroy', $message->id) }}" method='POST' class='form-delete'>
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							
							<button type='submit' class="btn btn-danger message-delete" style="width:60px;"><i class="glyphicon glyphicon-trash"></i></button>
							</form>   
						</td>
                                <?php $counter++; ?>
                    </tr>
				@endforeach
            @endif 
            </tbody>
           </table>
    	</div>
		 

           
    </div>
</div>
  <div id="message" class="modal fade">
    	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title alert alert-info">
				<p class="text-left"  style="color:white"> От: {{ $message->user_name }}</p>
				</h4>
            </div>
            <div align="justify" class="modal-body" style="margin-bottom:20px;">
            {{ $message->message }}
			<br>
			<br>
				<div class="col-md-6 col-md-offset-8">
					<button type="button" id='delete-btn' class="btn btn-primary">Ответить</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
				</div>
            <br>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    </div>	
	
	<div id="delmess" class="modal fade">
    		<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title alert alert-danger">Удалить сообщение?</h4>
            </div>
            <div class="modal-body">
           
            	<button type="button" id='deleteMess-btn' class="btn btn-default">Да</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
           
            
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    </div>		 
    	
    	
@endsection