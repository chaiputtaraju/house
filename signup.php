
<?php

	include_once('db.php');
	include_once('navbar.php');
	
	$sql=" select max(sino)+1 as sino from owners";
	$res=execute( $sql );
	$row=$res->fetch_object();
	
	if( $row )
	$sino=$row->sino;
	else
	$sino="1";

?>



		
<script src="jquery-1.11.0.js">
</script>

<script src="check.js">
</script>


<script>

$(document).ready(

		function(){
		
		
			$("#f1").submit(
						
			function(){
			
				var fdata=$("#f1").serialize();
				
								
				$.ajax({
				
				type: 'POST',
				url: 'savesignup.php',
				data:fdata,
				
				success: function( data )
				{
				
				location.href="payment.php";
				
				}
				});			
			
						
			return(false);
			
			}
			
			
			
			);
		
		
			$("#uname").blur( function(){
			
			
				$.get(
				
						"verifyuname.php",
						{uname:$("#uname").val()},
						
						function( data )
						{
							if( data==1)
							{
							alert("This username is already used ! choose another");
							$("#uname").focus();
							}
						}
						
						);
			
			});
		
		
		
		}
);


</script>

</head>
<body>



	<div class="container-fluid bg-info text-danger" >
	<h1>Signup Form</h1>
	<marquee behaviour=bounce ><font color=magenta><b>Owners Signup here</b></font></marquee>
	
	
	
	<form name=f1 method=post  id=f1 >
	<table class="table" >
	
	<tr>
	<td>
	
	<input type=text name=sino required id=sino value=<?php echo $sino ?>  readonly />
	
	</td></tr>
	
	<tr>
	<td>
	<input type=text  id=fname name=fname required onkeypress="return isAlpha();"  maxlength=20 placeholder="First Name" />
	</td></tr>
	
	<tr>
	<td>
	<input type=text id=lname name=lname required onkeypress="return isAlpha();"  maxlength=20 placeholder="Last Name" />
	</td></tr>
	
	
	<tr>
	<td>
	<input type=text  id=contno name=contno required maxlength=10 onkeypress="return isDigit();"  onblur="minLength( this,10);" placeholder="Contact No" />
	</td></tr>
	
	
	<tr>
	<td>
	<input type=email id=email name=email required onblur="chkemail( this );" placeholder="Email" />
</td></tr>
	
	<tr>
	<td>
	<textarea class=addr required=required name=addr placeholder="Address"></textarea>
	</td></tr>
	
	<tr>
	<td>
	<input type=text id=uname name=uname required  maxlength=20 placeholder="User Name"/>
	</td></tr>
	
	<tr>
	<td>
	<input type=password id=pwd name=pwd required  maxlength=20 placeholder="Password" />
	</td>
	</tr>
	
		
	
	
	<tr>
	<td>
	<input type=submit value=" CREATE ACCOUNT"  name=submit id=submit  class="btn btn-primary" />
	</form>
	</td></tr>
	
	</table>
	</div>


</body>
</html>