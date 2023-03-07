<?php

	include_once('db.php');
	
	include_once('navbar.php');
	
	$un=$_REQUEST['uname'];

	$sql="select * from owners where uname='$un' ";
	$res=execute( $sql );
	$row=$res->fetch_object();

	//$msg="<kbd>Name : $row->fname<br/>Contact no : $row->contno<br/>Email: $row->email<br/>Address: $row->addr</kbd>";
	//echo $msg;

	echo "<div class='container bg-info' >";
	echo "<table class='table'>";
	echo "<tr class='bg-danger'><th>Name</th><th>Contact no</th><th>Address</th><th>Email</th></tr>";
	echo "<tr><td>$row->fname</td><td>$row->contno</td><td>$row->addr</td><td>$row->email</td></tr>";
	echo "</table>";
	echo "</div>";
?>