<?php
	session_start();
	unset($_SESSION['sess_user2']);
	session_destroy();
	header("location:main.php");
?>