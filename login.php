<?php
	session_start();
	if (empty($_POST["uname"])) {
		header("location:index.php?uname_req");
		return;
	}
	if (empty($_POST["upass"])) {
		header("location:index.php?uname={$_POST["uname"]}&upass_req");
		return;
	}
	$uname=$_POST["uname"];
	$upass=$_POST["upass"];
	if ($uname==$upass) {
		if (!empty($_POST["uflag"])) {
			setcookie("uname", $uname, time()+24*60*60);
			setcookie("upass", $upass, time()+24*60*60);
		}
		$_SESSION["uname"]=$uname;
		header("location:main.php");
	} else {
		header("location:index.php?uname=$uname&login_err");
	}
?>