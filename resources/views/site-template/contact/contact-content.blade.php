	<!--contact-start-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h2 style="font-family:cursive">Обратная связь</h2>
			</div>
				<div class="contact-text">
				<div class="col-md-3 contact-left">
						<div class="address">
							<h5>Address</h5>
							<p>The company name, 
							<span>Lorem ipsum dolor,</span>
							Glasglow Dr 40 Fe 72.</p>
						</div>
						<div class="address">
							<h5>Address1</h5>
							<p>Tel:1115550001, 
							<span>Fax:190-4509-494</span>
							Email: <a href="mailto:example@email.com">contact@example.com</a></p>
						</div>
					</div>
					<div class="col-md-9 contact-right">
						<form method="post"  id="contactUs">
							{{ csrf_field() }}
							<input type='hidden' name="contactUsForm" value="key">
							<input type="text" style="margin:0px" name="name" placeholder="Имя" required="">
							<input type="text"  name="email" placeholder="Email" required="">
							<textarea placeholder="Ваше сообщение" name="message" required=""></textarea>
							<div class="submit-btn">
								<input type="submit" value="Отправить">
							</div>
						</form>
					</div>	
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--contact-end-->
	<!--map-start-->
	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.8869935158932!2d30.746614131160484!3d46.47746091024993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631965dfc29b9%3A0xcb38625fe2099a1e!2z0JrQvtC80L_RjNGO0YLQtdGA0L3QsNGPINCQ0LrQsNC00LXQvNC40Y8g0KjQkNCT!5e0!3m2!1sru!2sua!4v1490023267628" width="2000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
	<!--map-end-->