<?php

	include_once( 'db.php');
	
	$sino=$_REQUEST['sino'];
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$contno=$_REQUEST['contno'];
	$email=$_REQUEST['email'];
	$addr=$_REQUEST['addr'];
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	
	
	$sql="insert into owners values(
 $sino,'$fname','$lname','$contno','$email','$addr',curdate(),'$uname','$pwd' )";
 
	$res=execute( $sql );

	

	echo "<center><b>Ok Record is Saved</b></center>";
	echo "<br><center><a href=signup.php>Return</a></center>";
?>