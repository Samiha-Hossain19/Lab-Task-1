<?php 
	session_start();
	print_r($_REQUEST['password']);

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if ($username == null || $password == null) 
    {
		echo "invalid username/password <br>";
	}
    else{
		if($username == $password)
        {
			$_SESSION['status'] = true;
		}else{
			echo "invalid user <br> ";
		}
	}



?>