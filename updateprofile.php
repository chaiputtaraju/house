<?php
	
		session_start();
		$uname=$_SESSION['uname'];
	
		include_once('db.php');
	
	
	
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$contno=$_POST['contno'];
			$addr=$_POST['addr'];
			
	
				$sql="update owners set fname='$fname',lname='$lname',contno='$contno',email='$email',addr='$addr' where( uname='$uname' )";
			 
				$res=execute( $sql );

	

			echo "<center><b><font color=yellow size=5>Your  Profile has been Succesfully Updated</b></center>";
			echo "<br><center><a href=?page=editprofile.php ><font color=white size=4 ><b>Click Here to View Your Profile </b></font></a></center>";
			
	
		



?>