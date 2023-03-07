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
			header("Location:index.php");
			exit();
		}
		
		$sql="select datediff(expdate,curdate() ) as nod from owners where uname='$uname' ";
		
		$res=execute( $sql );
		$row=$res->fetch_object();
		
		
		if( $row->nod <=0 )
		{
			header("Location:index.php");
			exit();
		}
		
	}
	else
	{
		header("Location:index.php");
			exit();	
	}
	
	*/
	

?>


<html>
<head>
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

<script src="check.js" >
</script>


<script>

	$(document).ready(
	
		function(){
		
			$("#f1").submit(
			
			function(){
			
			
				if( $("#purpose").val()=="#" )
				{
				
				alert("Choose purpose");
				$("#purpose").focus();
				return false;
				}
				
				if( $("#purpose").val()=="RENT" || $("#purpose").val()=="LEASE" )
				{
				
					if( $("#htype").val()=="NOT-APPLICABLE" )
					{
					
						alert(" You must choose house type ! ")
						$("#htype").focus();
						return false;
					}
					
					
				}
				
			
			
			
				var fdata=$("#f1").serialize();
				
				//alert(fdata);
				
				$.ajax({
				
				type: 'POST',
				url: 'savead.php',
				data:fdata,
				success: function( data ){
				
				//alert(data);
				
				alert('Ok  Ad Saved');
				
				//$("#form").html(data);
				
				location.href="index.php";
							
				
				}
				
						
				
				
				});
			
				return(false);		
			}
			
				
			);
			
			
			
			$("#purpose").change( function(){
			
			
				if( $(this).val()=="COMMERCIAL" )
				{
					
					$("#htype").prop("selectedIndex",0);
					//$("#htype").prop("disabled",true);
				}
				else
				{
					$("#htype").prop("disabled",false);
				}
				
			
			});
			
			
			$("#htype").blur( function(){
			
			
				if( $("#purpose").val()=="COMMERCIAL" )
				{
					$("#htype").prop("selectedIndex",0);
				}
			
			});
		
		}
	);

</script>

</head>
<body>
<div  class="container"  id="form">
	<form name="f1"   id="f1"  method=post>
	
	<label><span class=star>*</span>Purpose</label>
	<select name=purpose id=purpose  >
	<option value=#>          </option>
	<option value=RENT>RENT</option>
	<option value=LEASE>LEASE</option>
	<option value=SALE>SALE</option>
	<option value=COMMERCIAL>COMMERCIAL</option>
	
	</select>
	
	<br>
	
	<label  ><span class=star>*</span>Area</label>
	<input type=text name=area id=area  required onkeypress="return isAlpha();" maxlength=100 />
	<br>
	
	
	<label for="addr" ><span class=star>*</span>Address</label>
	<textarea id=addr name=addr  class=addr  required ></textarea>
	<br>
	
	<label>House Type</label>
	<select name=htype id=htype >
	<option value="NOT-APPLICABLE">NOT-APPLICABLE</option>
	<option value=1BHK>1BHK</option>
	<option value=2BHK>2BHK</option>
	<option value=3BHK>3BHK</option>
	<option value=4BHK>4BHK</option>
	<option value=5BHK>5BHK</option>
	</select>
	
	
	<br>
	<label ><span class=star>*</span>Amount</label>
	<input type=text id=amount name=amount required onkeypress="return isDigit();"  maxlength=10 />
	<br>
	
	<label for="descri" ><span class=star>*</span>Description</label>
	<textarea id=descri name=descri required class=descri ></textarea>
	<br>
	
	
	<input type=submit value=" POST AD"  name=submit id=submit />

	</form>
</div>



</body>
</html>