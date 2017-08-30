<!--register-starts-->
<form action="{{ route('register') }}" method="post">
	<div class="register">
		<div class="container">
			<div class="register-top heading">
				<h2>{{ $title }}</h2>
			</div>
			<div class="register-main">
				<div class="col-md-6 account-left">
				
					<input placeholder="Ваше имя" type="text" tabindex="1" required>
					<input placeholder="Электронная почта" type="text" tabindex="3" required>
					<input placeholder="Введите пароль" type="password" tabindex="4" required>
					<input placeholder="Повторите пароль" type="password" tabindex="4" required>
						
				</div>
				<div class="col-md-6 account-left">
					<!-- <input placeholder="Введите пароль" type="password" tabindex="4" required>
						<input placeholder="Повторите пароль" type="password" tabindex="4" required> -->
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="address submit">
							<input type="submit" value="Зарегестрироваться">
						</div>
		        
		</div>
	</div>
	 {{ csrf_field() }}
</form>
	<!--register-end-->