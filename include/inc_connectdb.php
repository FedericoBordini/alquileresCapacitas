<?php
	$link = mysqli_connect("localhost", "root", "","capacitas");
	if (mysqli_connect_errno()) {
		trigger_error("Could not connect to SqlServer: ".mysqli_connect_error(),E_USER_ERROR);
	}
?>
