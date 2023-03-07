<?php
	
	include_once('navbar.php');
	
	include_once('db.php');
	
	if( isset($_SESSION['uname'] ) )
	{
		$uname=$_SESSION['uname'];
		
		$sql="select * from owners where uname='$uname' ";
		$res=execute( $sql );
		$row=$res->fetch_object();
		
		/*
		if( $row->pdate==NULL )
		{
			header("Location:index.php?report=Your  <a href=?page=payment.php>Payment</a> is not completed pay to Continue");
			exit();
		}
		
		$sql="select datediff(expdate,curdate() ) as nod from owners where uname='$uname' ";
		
		$res=execute( $sql );
		$row=$res->fetch_object();
		
		
		if( $row->nod <=0 )
		{
			header("Location:index.php?report=Your  account has expired please make<a href=?page=payment.php>Payment</a>  to Continue");
			exit();
		}
		
	}
	else
	{
		header("Location:index.php?report=You must <a href=?page=login.php>Login</a> to Continue");
		exit();	
	}
	
	*/
		
	$sql="select * from ads where uname='$uname' ";
	$res=execute( $sql );
	
 }	
?>

<html>
	<head>
	
	<style type="text/css" >
	
	
	</style>
	<title>
	View Stuff File
	</title>
	</head>
	
	<body>
	<div class="container" >
	<div class="row" >
	<div class="table-responsive" >
	
	<table align=center  class="table"  >
	<tr>
	<th>Purpose</th><th>Area</th><th>Address</th><th>House type</th><th>Amount</th><th>Description</th><th>Settings</th>
	</tr>
	
	<?php
	while( $row=$res->fetch_object() )
	{
	?>
	<tr>
	<td><?php echo $row->purpose ?> </td>
	<td><?php echo $row->area ?> </td>
	<td><?php echo $row->addr ?> </td>
	<td><?php echo $row->htype ?> </td>
	<td><?php echo $row->amount ?> </td>
	<td><?php echo $row->descri ?> </td>
	<td align=left>
	<a href=editstuff.php?sino=<?php echo $row->sino ?> >Edit</a>
	<br>
	<a href=uploadstuff.php?sino=<?php echo $row->sino ?> >Upload Photo</a>
	<br>
	
	<br>
	
	</td>
	</tr>
	<tr>
	<td colspan=7>
	&nbsp;
	</td>
	</tr>
	<?php
	}
	?>
	
	</table>
	
	</div></div></div>
	</body>
	
	
</html>	