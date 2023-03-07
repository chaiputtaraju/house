<?php
	
		session_start();
		$uname=$_SESSION['uname'];
	
		include_once('db.php');
	
	
	
			$hsino=$_POST['hsino'];
			$purpose=$_POST['purpose'];
			$area=$_POST['area'];
			$addr=$_POST['addr'];
			$htype=$_POST['htype'];
			$amount=$_POST['amount'];
			$descri=$_POST['descri'];
			
	
				$sql="update ads set purpose='$purpose',area='$area',addr='$addr',htype='$htype',amount=$amount,descri='$descri' where(sino=$hsino and uname='$uname' )";
			 
				$res=execute( $sql );

	

			echo "<center><b><font color=yellow size=5>Your  Ad has been Succesfully Updated</b></center>";
			echo "<br><center><a href=?page=viewstuff.php ><font color=white size=4 ><b>Click Here to View Your Ad </b></font></a></center>";
			
	
		



?>