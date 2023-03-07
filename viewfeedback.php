<?php
include_once('adminnavbar.php');
include_once('db.php');
$sql="select * from feedback ";
$res=execute( $sql );
?>
<style>
table.displaytable{

	margin-left:auto;
	margin-right:auto;
	margin-top:100px;
	width:auto;
	border:1px solid white;
}

table.displaytable th{

background-color:blue;
color:black;
padding:10px;
border:1px solid white;
}

table.displaytable td{

background-color:black;
color:white;
padding:10px;
border:1px solid white;
}

h1{
color:yellow;
}

</style>

<body>
<div class="container-fluid  bg-primary text-danger"  >
<table align=center class="table  table-responsive" ><caption><h1>Feed back's</h1>
<tr class="" ><th>Slno</th><th>Name</th><th>Email ID</th><th>Feed Back</th><th>&nbsp;</th></tr>
<?php
$slno=1;
while( $row=$res->fetch_object() )
{
?>
<tr>
<td><?php echo $slno ?> </td>
<td><?php echo $row->name ?> </td>
<td><?php echo $row->email ?> </td>
<td><?php echo $row->opinion ?> </td>
<td>
<a  class="btn btn-danger" href="deletefeedback.php?slno=<?php echo $row->slno ?>" onclick="return confirm('Are you sure ???');">Delete
</a> 

</td>

</tr>
<?php
$slno++;
}
?>
</table>
</body>

</html>