<?php


	include_once('db.php');
		
	
	$uname=$_REQUEST['uname'];
	
	
	
	$sql="select * from owners where uname='$uname'";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( $row )
	{
		echo "1";
	}	
		
	else
	{
		echo "0";
	}


?>