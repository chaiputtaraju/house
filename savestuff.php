<?php
	
	
	include_once('navbar.php');
	
	include_once('db.php');
	
	
		
?>
	

<html>

<head>
<link rel="stylesheet" type="text/css" href="indexpage.css" />	
</head>

<body>
		
		
		<div id=content>
		
		<?php
		
		if( isset( $_REQUEST['hrefno'] ) )
		{
			$hrefno=$_REQUEST['hrefno'];
			$caption=$_REQUEST['caption'];
			$imgname=$_FILES['imgname']['name'];
			$current_image=$imgname;
			$descri=$_REQUEST['descri'];
			
			
			$extension = substr(strrchr($current_image, '.'), 1);
			if (($extension == "jpg") || ($extension == "jpeg")  || ($extension == "png")) 
			{

			}
			else
			{
			die('Unknown extension');
			}
			
			$new_image = $current_image;
			$destination="photos/".$new_image;
			move_uploaded_file($_FILES["imgname"]["tmp_name"],"photos/" . $_FILES["imgname"]["name"]);
			
			
			$sql="select count(*)+1 as sino from snaps where( refno=$hrefno and uname='$uname' ) ";
			$res=execute( $sql );
			$row=$res->fetch_object();
			$sino=$row->sino;
			
			$sql="insert into snaps values( $sino,$hrefno,'$uname','$caption','$imgname','$descri')";
			$res=execute( $sql );
			
			echo "<center><font color=blue size=5>Uploaded Successfully </font><br/><br/><a href=index.php?page=viewstuff.php><b>Return</b></a>
			</center>";
		}	
		
		?>
		</div>
		
</body>

</html>
