<div id="messages">
	<?php if ($session->check('Message.flash')) { $session->flash(); } ?> 
	<?php if ($session->check('Message.auth')) { $session->flash('auth'); } ?> 
</div>
