<?php
// Include a local bootstrap file so that settings can be added for only the local development environment.
if(file_exists(CONFIGS . 'bootstrap.local.php')) {
	require('bootstrap.local.php');
}
?>
