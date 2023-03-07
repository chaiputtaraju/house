<?php
	
	$sql=$_REQUEST['sq'];
	include_once('db.php');
	
	
	$res=execute( $sql );
?>

<html>
<head>
	

	
	
	<script src="jquery-1.11.0.js">
	</script>
	
	<script>
	$(document).ready(function(){
	
		$("#ownerdet").hide();
	
		$(".owner").on("click",function(data){
		
		
		$("#ownerdet").load("getownerdet.php",{un:$(this).attr("id")},function(data){
		 
		 //alert(data);
		 
		 $("#ownerdet").slideToggle(500);
		 } );
		
		
		
		
		});
	
	
	});
	</script>
	
	
	
	
</head>
<body>
	
	<div class="row">
	
	<div class="table-responsive" >
	
	<?php
	while( $row=$res->fetch_object())
	{
	?>
	<div class="container-fluid bg-info" style="border:2px solid black;"  >
	<table align=center class="table table-condensed" >
	<tr>
	<td>Purpose</td><td><?php echo $row->purpose ?></td>
	</tr>
	
	<tr>
	<td>Area</td><td><?php echo $row->area ?></td>
	</tr>
	
	<tr>
	<td>House type</td><td><?php echo $row->htype ?></td>
	</tr>
	
	<tr>
	<td>Amount</td><td><?php echo $row->amount ?></td>
	</tr>
	
	<tr>
	<td>Address</td><td><?php echo $row->addr ?></td>
	</tr>
	
	<tr>
	<td>Descr</td><td><?php echo $row->descri ?></td>
	</tr>
	<tr>
	<td colspan=2>
	<div class="container" style="">
	<?php
	$sql="select * from snaps where refno=$row->sino limit 3";
	$res1=execute( $sql);
	echo "<ul>";
	while( $row1=$res1->fetch_object())
	{
	echo "<li style='float:left; padding:2px;'>
	<a href=snapdetailsu.php?sino=$row->sino >
	<img src='photos/$row1->imgname ' width=100px height=100px />
	</a>
	</li>";
	}
	
	?>
	</div>
	</td>
	</tr>
	
	<tr>
	<td colspan=2>
	
	<a href="displayownerinfo.php?uname=<?php echo $row->uname ?>" class="btn btn-primary btn-sm" >Owner info</a>
	</td>
	</tr>
	
	
	</table>
	
	</div>
	<?php
	}
	?>
	
	</div></div> 
	<div id=ownerdet>
	Am here to display owners det
	</div>
	
</body>
</html>