<?php
	
	include_once('navbar.php');
	
	include_once('db.php');
	
	/*
	
	if( isset($_SESSION['uname'] ) )
	{
		$uname=$_SESSION['uname'];
		
		$sql="select * from owners where uname='$uname' ";
		$res=execute( $sql );
		$row=$res->fetch_object();
		
		
		if( $row->pdate==NULL )
		{
			header("Location:index.php?report=Your  <a href=?page=payment.php>Payment</a> is not completed pay to Continue");
			exit();
		}
		
		$sql="select datediff(expdate,curdate() ) as nod from owners where uname='$uname' ";
		
		$res=execute( $sql );
		$row=$res->fetch_object();
		
		
		if( $row->nod <=0 )
		{
			header("Location:index.php?report=Your  account has expired please make<a href=?page=payment.php>Payment</a>  to Continue");
			exit();
		}
		
	}
	else
	{
		header("Location:index.php?report=You must <a href=?page=login.php>Login</a> to Continue");
			exit();	
	}
	
	*/
	
	$sql="select * from owners where uname='$uname' ";
	$res=execute( $sql);
	$row=$res->fetch_object();
	
	
	
?>


<html>
<head>

<script src="check.js">
</script>

<link rel="stylesheet" type="text/css" href="signup.css" />		

<style type="text/css" >

.star{

color:red;
font-weight:bold;
font-size:1.2em;
}
</style>
<script src="jquery-1.11.0.js">
</script>

<script>

	$(document).ready(
	
		function(){
		
			$("#f1").submit(
			
			function(){
			
				var fdata=$("#f1").serialize();
				
				$.ajax({
				
				type: 'POST',
				url: 'updateprofile.php',
				data:fdata,
				success: function( data ){
				
				$("#form").html(data);
				
				alert('Ok Updated');
							
				
				}
				
						
				
				
				});
			
				return(false);		
			}
			
				
			);
			
		
		}
	);

</script>

</head>
<body>
<div id=form  class='container' >
	<form name="f1"   id="f1"  method=post>
	 
    
	<label  ><span class=star>*</span>First name</label>
	<textarea name=fname id=fname required style="height:32px;" maxlength=20 onkeypress="return isAlpha();" ><?php echo $row->fname ?></textarea>
	<br>
	
	<label ><span class=star>*</span>Last name</label>
	<input type=text id=lname name=lname required value=<?php echo $row->lname ?>  onkeypress="return isAlpha();" maxlength=20 />
	<br>
	
	<label ><span class=star>*</span>Contno</label>
	<input type=text id=contno name=contno required value=<?php echo $row->contno ?> maxlength=10 onkeypress="return isDigit();"  onblur="minLength(this,10);" />
	<br>
	
	<label ><span class=star>*</span>Email</label>
	<input type=email id=email name=email required value=<?php echo $row->email ?> onblur="chkemail(this);"  />
	<br>
	
	<label for="addr" ><span class=star>*</span>Address</label>
	<textarea id=addr name=addr  class=addr  required ><?php echo $row->addr ?></textarea>
	<br>
	
	
	
	
	<input type=submit value=" UPDATE "  name=submit id=submit />

	</form>
</div>



</body>
</html>