<?php

			include('db.php');
			
			session_start();
			if( isset($_SESSION['uname']))
			{
			$uname=$_SESSION['uname'];
			}
			

			$sql="select date_add( curdate(),INTERVAL 45 DAY ) as expdate";
			$res=execute( $sql);
			
			$row=$res->fetch_object();
			$expdate=$row->expdate;
			
			
			$sql="update owners set pdate=curdate(),expdate='$expdate' where uname='$uname' ";
			
			$res=execute( $sql);
			echo "<center><font color=white size=4>Your account is active</font></center>";
			//header('Location:index.php');
?>
