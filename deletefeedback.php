
<?php
	
	include_once('adminhomepage.php');
	include_once('db.php');


	$slno=$_REQUEST['slno'];
	
	
	$sql="delete from feedback where slno=$slno";
	$res=execute( $sql );
	
	header("Location:viewfeedback.php");
	


?>