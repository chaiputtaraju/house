<?php
include('db.php');
$un=$_REQUEST['un'];

$sql="select * from owners where uname='$un' ";
$res=execute( $sql );
$row=$res->fetch_object();

$msg="Name : $row->fname<br>Contact no : $row->contno<br/>Email: $row->email<br/>Address: $row->addr";
echo $msg;
?>