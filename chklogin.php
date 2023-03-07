<?php

	session_start();
	
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	
	include_once('db.php');
	
	$sql="select uname,fname,datediff(expdate,curdate()) as nodays from owners where( uname='$uname' and pwd='$pwd' )";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( isset($row->uname) )
	{
	$_SESSION['uname']=$uname;
	$_SESSION['fname']=$row->fname;
	$_SESSION['nodays']=$row->nodays;
	echo "1";
	}
	else
	echo "0";
	
?>	