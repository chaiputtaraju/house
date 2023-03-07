<?php
	
		session_start();
		$uname=$_SESSION['uname'];
	
		include_once('db.php');
	
	
	
			
			$purpose=$_POST['purpose'];
			$area=$_POST['area'];
			$addr=$_POST['addr'];
			$htype=$_POST['htype'];
			$amount=$_POST['amount'];
			$descri=$_POST['descri'];
			
	
				$sql="insert into ads( purpose,area,addr,htype,amount,descri,uname ) values( '$purpose','$area','$addr','$htype','$amount','$descri','$uname' )";
			 
				$res=execute( $sql );

	

			echo "<center><b><font color=yellow size=5>Congrats !! Your  Ad has been Succesfully Saved</b></center>";
			echo "<br><center><a href=?page=viewstuff.php ><font color=white size=4 ><b>Click Here to View Your Ad </b></font></a></center>";
			
	
		



?>