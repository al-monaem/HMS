<?php

	session_destroy();
	session_unset();
	header("Location: ../view/login.php");
	exit();

?>