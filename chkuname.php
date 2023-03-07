<?php


	include_once('db.php');
		
	
	$uname=$_REQUEST['uname'];
	
	
	
	$sql="select * from owners where uname='$uname'";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( $row )
	{
		$pwd=$row->pwd;
		$mobno=$row->contno;
		//echo "1";
		
		header("Location: sendSMS.php?mobno=$mobno&msg=$pwd");
	}
	else
	{
		echo "0";
	}


?>