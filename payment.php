	<?php
	include_once('navbar.php');

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
			
			
				if( $("#ctype").val()=="#" )
				{
				
				alert("Choose card type");
				$("#ctype").focus();
				return false;
				}
			
				var fdata=$("#f1").serialize();
				
				//alert(fdata);
				$.ajax({
				
				type: 'POST',
				url: 'savepayment.php',
				data:fdata,
				
				success: function( data )
				{
				
				//$("#f1").html(data);
				location.href="index.php";
				
				}
				
					
				
				});			
			
						
			return(false);
			
			});} );


</script>

			
			</head>
			
			
			<body>
			<form name=form id=f1>
			<table  class="table table-striped">
			<tr>
			<td colspan=2>
			<font color=white size=5><b>An amount of 200 Rs will be deducted from your account</b></font>
			</td>
			</tr>
			<tr>
			<td>
			Card type
			</td>
			<td>
			<select name=ctype id=ctype>
			<option value=#>-- choose card type --</option>
			<option>Moestro</option>
			<option>Visa</option>
			</select>
			</td>
			</tr>
			
			<tr>
			<td>
			Enter 16 digit card no
			</td>
			<td>
			<input type=password maxlength=16 id=cardno name=cardno onkeypress="return isDigit();" placeholder="Enter 16 digit cardno" required=required  size=21 onblur="minLength(this,16); " />
			</td>
			</tr>
		
			<tr>
			<td colspan=2 align=center>
			<input type=submit value=" Make payment" id=submit />
			</td>
			</tr>
			
			</table>
			</form>
			
			</body>
			</html>