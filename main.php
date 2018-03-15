<?php
	session_start();
	if (empty($_SESSION["uname"])) {
		header("location:index.php");
		return;
	}
	echo $_SESSION["uname"];
?>