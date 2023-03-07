<?php

			include_once('db.php');
	
	
	
			$sino=$_POST['sino'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$contno=$_POST['contno'];
			$email=$_POST['email'];
			$addr=$_POST['addr'];
			$uname=$_POST['uname'];
			$pwd=$_POST['pwd'];
	
			$sql="select * from owners where uname='$uname' ";
			$res=execute( $sql );
			
			$row=$res->fetch_object();
			
			
			if( $row )
			{
			echo "<center><font color=red size=5>This user name is already used, choose another !</font></center>";
			return;
			}
			
	
			$sql="insert into owners values(
			$sino,'$fname','$lname','$contno','$email','$addr',curdate(),'$uname','$pwd',null,null )";
			 
			$res=execute( $sql );
			
			session_start();
			$_SESSION['uname']=$uname;
			$_SESSION['fname']=$fname;
			
			
			//header('Location:payment.php');			
			
			//include_once('payment.php');
?>	
			
			
	
		



	