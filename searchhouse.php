
<?php

	include_once('navbar.php');
?>

<?php

include('db.php');
$sql="select distinct area from ads";
$res=execute( $sql );
?>

<style>
table.search {
border-collapse:collapse;
border-radius:5;
border:3px solid ivory;
margin-bottom:10px;
}
table.search td{
padding:10px;
text-align:center;
color:white;
}

b1{

border-radius:5px;
padding:5px;
background-color:purple;
color:white;
font-weight:bold;
}
</style>


<script src="jquery-1.11.0.js">
</script>

<script src="check.js">
</script>

<script>
$(document).ready(

function()
{

	$("#b1").click(function(){
	
		var sql="select * from ads where( ";
		
		//alert($("#purpose").prop("selectedIndex") );
		//alert($("#purpose").val() );
		
		//alert( sql.length);
		
		var flag=0;
		
		if( $("#purpose").prop("selectedIndex") !=0 )
		{
		
		flag=1;
		sql=sql+"purpose='"+$("#purpose").val()+"'";
		}
		
		if( $("#htype").prop("selectedIndex") !=0 )
		{
			if( flag==1)
			sql=sql+" and htype='"+$("#htype").val()+"'";
			else
			sql=sql+" htype='"+$("#htype").val()+"'";
			
			flag=1;
			
		}
		
		if( $("#area").prop("selectedIndex") !=0 )
		{
			if( flag==1)
			sql=sql+" and area='"+$("#area").val()+"'";
			else
			sql=sql+" area='"+$("#area").val()+"'";
			
			flag=1;
			
		}
		
		if( $("#amountfrom").val() != "" && $("#amountto").val() != "" )
		{
		
			if( eval($("#amountfrom").val() ) > eval($("#amountto").val()) )
			{
				alert("Not a valid amount");
				return false;
			
			}
			
			if( flag==1)
			sql=sql+" and (amount between "+$("#amountfrom").val()+" and "+$("#amountto").val()+") "
			else
			sql=sql+" (amount between "+$("#amountfrom").val()+" and "+$("#amountto").val()+") "
						
		}
		
		if( sql.length==25)
		{
			alert("No search condition's are selected ! ");
			return false;
		}
		
		
		
		sql=sql+" )";
		
		//alert(sql);
			
		$(".c1").hide();
		
		$("#result").load("searchresult.php",{sq:sql});
		
		
		//location.href="searchresult.php?sq="+sql;
		
	});
});


</script>






<style>

select{

width:200px;
height:40px;
font-weight:bold;
background-color:honeydew;
}
</style>

</head>


<body>

<div class="container c1" >
<form name=f1>

<center>
<select id=purpose name=purpose>
<option value=#>Select Purpose</option>
<option value=RENT>RENT</option>
<option value=LEASE>LEASE</option>
<option value=SALE>SALE</option>
<option value=COMMERCIAL>COMMERCIAL</option>
</select>

<br/><br/>

<select id=htype name=htype>
<option value=#>House Type</option>
<option value=1BHK>1BHK</option>
<option value=2BHK>2BHK</option>
<option value=3BHK>3BHK</option>
<option value=4BHK>4BHK</option>
<option value=5BHK>5BHK</option>
</select>

<br/><br/>


<select id=area name=area>
<option value=#>Select Area</option>
<?php
while( $row=$res->fetch_object())
{
echo "<option value='$row->area'>$row->area</option>";
}
?>
</select>

<br/>
</center>


<br/>
<center>
<b>Amount Range</b>
<br/>


<input type=number id=amountfrom name=amountfrom  placeholder="From" maxlength=10 />
<br/><br/>
<input type=number name=amountto  id=amountto maxlength=10  placeholder=" To "/>


<br/><br/>

<input type=button class="btn btn-danger btn-lg" value="DISPLAY RESULT"  id="b1" />

</center>
</form>

</div>
<div id=result>

</div>
</body>

</html>