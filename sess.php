<?php
	session_start();
	if( isset( $_SESSION['uname'] ) )
	{
		$uname=$_SESSION['uname'];
		$fname=$_SESSION['fname'];
	}

?>