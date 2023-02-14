<?php $this->view('shared/header', 'Contact us'); ?>
	<h1>Contact us</h1>
	<p>Wanna reach us? Write you email information and message in the following form and then submit</p>

	<form method ="post" action="">
		<label>Email:</label>
		<input type="email" name="email">

		<label>Message:</label>
		<textarea></textarea> 

		<input type="submit" name="action" value='Send!'>
	</form>

</body>
</html>