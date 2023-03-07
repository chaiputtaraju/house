	<?php
	
	include_once('sess.php');
	include_once('db.php');
	
	$sino=$_REQUEST['sino'];
	
	$sql="select * from snaps where( uname='$uname' and refno=$sino ) order by sino ";
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
	<table align=center >
	<tbody>
	
		<?php
		while( $row=$res->fetch_object() )
		{
		echo "<tr><td class=caption>$row->caption &nbsp;&nbsp;&nbsp;<a href=deletesnaps.php?sino=$row->sino&refno=$row->refno>Delete</a></td></tr><tr><td class=images><img src='photos/$row->imgname' /></td></tr><tr><td class=descr><pre>$row->descri</pre></td></tr><tr class=gap><td>&nbsp;</td></tr>";
		}
		?>
		
	</tbody>
	</table>
	
	</body>
	
	</html>
	
	
	
	