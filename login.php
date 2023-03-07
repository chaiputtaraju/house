
<?php

include_once('navbar.php');

?>

<script src="jquery-1.11.0.js">
</script>

<script>

$(document).ready(

		function(){
		
		
			$("#f1").submit(
			
			
			function(){
			
				$.get(
				
				"chklogin.php",
				{
				uname:$("#uname").val(),
				pwd:$("#pwd").val()
				
				},
				
				function( data )
				{
				
					
					
					if( data==1 )
					{
					location.href="index.php";
					}
					else
					{
					 //alert("Either User Name or password is Wrong !");
					 
					 $("#notify").html("<br/><font color=white><b><center>Either user name / password is wrong<br/></b></font><a href=index.php?page=getpwd.php><b>Forget your password ???</b></a></center>");
					}
				}
				
				
				
				
				);			
			
			
			
			
			return(false);
			
			}
			
			
			
			);
		
		
		
		
		}
);


</script>
	
	
	
	
	
	
	</head>
	<body>
	
	<div class="container text-danger bg-info" >
	<h1>Login Form</h1>
	<form name=f1 method=post id=f1 >
	
	<table class="table" >
	
	<tr>
	<td>
	
	<input type=text name=uname id=uname required placeholder="Enter User Name" />
	</td>
	</tr>
	
	<tr>
	<td>
	<input type=password name=pwd id=pwd required placeholder="Enter Password" />
	</td>
	</tr>
	
	<tr>
	<td>
	<input  class="btn btn-primary" type=submit id=submit name=submit value="Login" />
	
	</td>
	</tr>
	
	</form>
	
	<span id=notify></span>
	</div>
	</body>



</html>