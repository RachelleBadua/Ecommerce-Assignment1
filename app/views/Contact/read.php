<?php $this->view('shared/header', 'Read Message log page'); ?>
	
		<h1>Contact us - message sent</h1>
		<div>
			<!-- Goes through the array and display the messages -->
			<?php
				foreach ($data as $message) { 
				$obj = json_decode($message); ?>
				<b><?= htmlentities($obj->email ?? ''); ?><br></b>
				<?= htmlentities($obj->message ?? ''); ?><br><br>
			<?php
			}
			?>
		</div>
	</div>
			
		
	
	
</body>
</html>