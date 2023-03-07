<?php

	include_once('sess.php');
	include_once('db.php');
	
	$sino=$_REQUEST['sino'];
	$refno=$_REQUEST['refno'];
		

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="indexpage.css" />
</head>

<body>
<?php
include_once('page1.php');
?>
<div id=content>
	<?php
	
	$sql="delete from snaps where(sino=$sino and refno=$refno and uname='$uname' )";
	$res=execute( $sql );
	
	$sql="update snaps set sino=sino-1 where(sino > $sino and refno=$refno and uname='$uname' )";
	
	$res=execute( $sql );
	
	echo "<center><font color=white><b>Ok Deleted Succesfully<br/><a href=index.php?page=viewstuff.php>BACK</a></b></font></center>";
	?>
	
</div>

<?php
include_once('page2.php');
?>

</body>
</html>