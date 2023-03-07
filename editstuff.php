<?php

	include_once('db.php');
	
	$sino=$_REQUEST['sino'];
	$sql="select * from ads where sino=$sino";
	$res=execute( $sql);
	$row=$res->fetch_object();
	
	$p=array('COMMERCIAL','RENT','LEASE','SALE');
	$h=array('NOT-APPLICABLE','1BHK','2BHK','3BHK','4BHK','5BHK');
	
	
?>


<html>
<head>

<script src="check.js" >
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
			
			
			 //alert('ok');
			 
				if( $("#purpose").val()=="RENT" || $("#purpose").val()=="LEASE" )
				{
				
					//alert($("#htype").val());
					
					if( $("#htype").val()=="NOT-APPLICABLE" )
					{
					
						alert(" You must choose house type ! ")
						$("#htype").focus();
						return false;
					}
					
					
				}
				
			
			
				var fdata=$("#f1").serialize();
				
				$.ajax({
				
				type: 'POST',
				url: 'updatead.php',
				data:fdata,
				success: function( data ){
				//alert(data);
				$("#form").html(data);
							
				
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
<div id=form >
	<form name="f1"   id="f1"  method=post>
	<input type=hidden name=hsino id=hsino value=<?php echo $sino ?> />
	<label><span class=star>*</span>Purpose</label>
	<select name=purpose id=purpose  >
	<?php
	for($i=0; $i<4; $i++)
	{ ?>
	<option value=<?php echo "$p[$i]" ?>  <?php if( $row->purpose==$p[$i]) {echo "selected";} ?> > <?php echo "$p[$i]" ?></option>
	
	<?php } ?>
	</select>
	
	<br>
	
	<label  ><span class=star>*</span>Area</label>
	<textarea name=area id=area required style="height:32px;"   onkeypress="return isAlpha();"  ><?php echo $row->area ?></textarea>
	<br>
	
	
	<label for="addr" ><span class=star>*</span>Address</label>
	<textarea id=addr name=addr    class=addr required ><?php echo $row->area ?></textarea>
	<br>
	
	<label>House Type</label>
	<select name=htype id=htype >
	<?php
	for($i=0; $i<6; $i++)
	{ ?>
	<option value=<?php echo $h[$i] ?>  <?php if( $row->htype==$h[$i]) {echo "selected";} ?> > <?php echo $h[$i] ?></option>
	
	<?php } ?>
	
	</select>
	
	
	<br>
	<label ><span class=star>*</span>Amount</label>
	<input type=text id=amount name=amount required value=<?php echo $row->amount ?>  onkeypress="return isDigit();" />
	<br>
	
	<label for="descri" ><span class=star>*</span>Description</label>
	<textarea id=descri name=descri required class=descri ><?php echo $row->descri?></textarea>
	<br>
	
	
	<input type=submit value=" UPDATE "  name=submit id=submit />

	</form>
</div>



</body>
</html>