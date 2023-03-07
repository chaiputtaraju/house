<?php

		include_once('db.php');
		
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$opinion=$_REQUEST['opinion'];
		
		
		//$sql="insert into feedback(name,email,opinion) values('$name','$email','$opinion')";
		
		//$res=execute( $sql );
		
		
		$conn=mysqli_connect('localhost','root','','house');
	
		if( !$conn )
		{
		die( mysqli_connect_error());
		}
	
	
	    $res=$conn->query( "CALL savefeedback('$name','$email','$opinion')" );
		
		
		echo "<div class='bg-info'><center><h2>Feed back saved</h2></center></div>";
		
			
?>