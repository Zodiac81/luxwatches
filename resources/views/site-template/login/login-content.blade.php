<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2></h2>
			</div>
			<div class="account-main">
				<div class="col-md-6 account-left">
					<h3>Existing User</h3>
				  <form action="">
					<div class="account-bottom">
						<input placeholder="Email" type="text" tabindex="3" required>
						<input placeholder="Password" type="password" tabindex="4" required>
						<div class="address">
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login">
						</div>
					</div>
				  </form>
				</div>
				<div class="col-md-6 account-right account-left">
					<h3>New User? Create an Account</h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a href="{{ route('register') }}">Create an Account</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--account-end-->