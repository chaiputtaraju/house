

<html>

<head>

	<script src="jquery-1.11.0.js">
	</script>
	
	
	<script>
	
	$(document).ready(
	
		function(){
		
				
				$("#msg").hide();
				$("#busy").hide();
				
				$("#f1").submit(
				
				function(){
				
				$("#busy").show();
				
				$.get(
				
				"chkuname.php",
				{
				uname:$("#uname").val(),
				
				},
				
				function( data )
				{
					//alert(data);
					
					$("#busy").hide();
					if( data==0 )
					{
					$("#msg").show();
					}
					else if( data==1 )
					{
					$("#msg").show();
					$("#msg").html("<b><font color=yellow size=5 >Your Password has been sent your mobile number check it</font></b>");
					
					}
					else if( data==-1)
					{
					$("#msg").show();
					$("#msg").html("<b><font color=green>Server is Busy Try Again Later</font></b>");
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

<body bgcolor=white >
	
	<img src="images/recovery.jpg" />
	
	<center>
	<form name=f1 method=post id=f1 >
	
	<b><font color=white>Enter Your UserName </font>&nbsp; </b>
	<input type=text id=uname name=uname required style="height:35px; width:220px; border-radius:8px; font-weight:bold;; background-color:honeydew; font-size:16px;  outline:none; padding:8px;"/>
	
	<input type=submit name=submit value="Get Password" />
	
	</form>
	
	<br>
	<img src="images/mobile.jpg" />
	
	<br>
	
	<span id=msg><font color=red size=3><b>This Username does't Exist !!</b></font></span>
	
	<br>
	<span id=busy>
	<img id=loading src="images/Loading_Animation.gif"  width=200 /><br>
	<font color=white>Sending message...</font>
	</span>
	</center>
	
</body>



</html>