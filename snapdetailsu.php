	<?php
	
	include_once('navbar.php');
	include_once('db.php');
	
	$sino=$_REQUEST['sino'];
	
	$sql="select * from snaps where(  refno=$sino ) order by sino ";
	$res=execute( $sql );
	
	?>
	
	<html>
	
	<head>
	<style type="text/css" >
		
		table{ border-collapse:collapse;  border-radius:15px;}
		td{ 
		
			
			border:none;
		}
		
		.caption{
		
		padding-left:20px;
		height:40px;
		border:2px solid gray;
		background-color: thistle;
		//border-radius:10px;
		font-size:18px;
		font-weight:bold;
		font-family:'Trebuchet MS';
		outline:none;
		}
		
		.images{
		
		padding-top:20px;
		padding-bottom:25px;
		
		}
		
		.descr{
		
		//border:1px dashed white;
		text-align:justify;
		font-size:15px;
		//font-weight:bold;
		background-color:white;
		color:black;
		//width:100px;
		padding-left:20px;
		
		}
		
		.gap{
		
		background-color:#333;
		}
	</style>
	
	</head>
	
	<body>
	<table class="table" >
	<tbody>
	
		<?php
		while( $row=$res->fetch_object() )
		{
		echo "<tr><td><kbd>$row->caption </kbd></td></tr><tr><td ><img src='photos/$row->imgname' class='img img-responsive' /></td></tr><tr><td class=descr>$row->descri</td></tr><tr ><td>&nbsp;</td></tr>";
		}
		?>
		
	</tbody>
	</table>
	
	</body>
	
	</html>
	
	
	
	