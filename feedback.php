
<?php

	include_once('navbar.php');

?>
<script>
$(document).ready( function(){


	window.scrollTo(0,2000);
	
	$("#formfeedback").submit( function(){
	
	
		$.get(
					
					"savefeedback.php",
					{
					name:$("#name").val(),email:$("#email").val(),opinion:$("#opinion").val()
					},
					
					function( data )
					{
						//alert(data);
						$(".bgg").html("<center><h1>Thank You</h1></center>");
					}
		
				);
	
		
	return false;
	});
	
	
	
});

</script>

<style>

<style>

.table td{
color:brown;
font-weight:bold;
font-size:20px;

}

.table td:first-child{
text-align:left;
font-weight:bold;
font-size:20px;

}

input[type='text'],input[type='email'],input[type='password'],select,input[type='option'],textarea{

border:1px solid black;
width:250px;
height:40px;
padding-left:10px;
color:black;
font-weight:bold;
font-size:22px;
}

.s1{

color:black;
}

textarea{
height:120px;
}
</style>
</style>


</head>


<body>



<div class="container bg-info feedback" style="background: url(50%-transparent-white.png);background: rgba(255,255,255,0.5);">

	
<div class="text-danger bg-info bgg" style="opacity:0.8;" >
<h1>Feed Back Form</h1>
<form name="formfeedback" id="formfeedback" method="post"  >
<table class="table" >

<tr>
<td>Name</td>
<td>
<input type="text" placeholder="Name" name="name" maxlength=50 required=required id="name" onkeypress="return isAlpha();" />
</td>
</tr>



<tr>

<td>Email ID</td>


<td>
<input type="email" placeholder="Email" id="email" name="email" required=required onblur="chkemail(this);"  />
</td>
</tr>

<tr>

<td>Your Opinion</td>
<td>

<textarea name="opinion" id="opinion" required=required placeholder=" Your Thoughts !! "></textarea>
</td>
</tr>



<tr>
<td style="text-align:center;" colspan="2"  >
<input type="submit" value=" Save Feed Back"  class="btn btn-danger btn-lg"/>
</td>
</tr>

</table>
</form>



</div>
<span class="message"></span>

</div>


</body>

</html>