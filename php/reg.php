<?php
	include_once "bd.php";
	
	if (isset($_POST['email']) && isset($_POST['password'])) {
		$pass = md5($_POST['password']);
		if ($db->query("INSERT `users` (`login`, `password`) VALUES ('". $_POST['email'] ."', '". $pass ."')")) {
			echo 'Ok';
			exit(0);
		}
	}
?>