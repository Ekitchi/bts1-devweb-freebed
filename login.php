<?php
	function logIn($mail, $pwd)
	{
		$user = new User($mail, $pwd);
		echo $user->getNom();
		if ($user->getType() != 999)
			$_SESSION["user"] = $user;
		else
			unset($_SESSION["user"]);
	}
	
	function logOut()
	{
		session_destroy();
		session_start();
	}
?>