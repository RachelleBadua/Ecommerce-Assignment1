<?php $this->view('shared/header', 'Contact us'); ?>
	<h1>Contact us</h1>
	<p>Wanna reach us? Write you email information and message in the following form and then submit</p>

	<form method ="post" action="/Contact/create">
		<div class="form-group">
			<label>Email:</label>
			<input type="email" name="email" class="form-control"><br>
		</div>
		
		<div class="form-group">
			<label>Message:</label>
			<textarea name="message" class="form-control"></textarea><br> 
		</div>

		<input type="submit" name="action" value='Send!' class="btn btn-primary">
	</form>

</body>
</html>