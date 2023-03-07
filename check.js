
	
	
	function isDigit()
	{
		
		var k=event.keyCode;

		if( !(k>=48 && k<=57) )
		{
		return(false); // 0 is ascci value of null
		}	
	}


	function changeCase( t )
	{

		t.value=t.value.toUpperCase();
	}

	function isAlpha()
	{
		
		var k=event.keyCode;

		

		if( !((k>=97 && k<=122) || (k>=65 && k<=90) || k==32 ) )
		{
		return(false); // 0 is ascci value of null
		}	
	}	


	function initCase( t )
	{
		var fl=t.value.substring(0,1).toUpperCase();
		var rl=t.value.substring(1,t.value.length);

		var res=fl+rl;

		t.value=res;
	}
	
	
	
function chkemail( t )
{

	
	var x=t.value;
	var ap=x.indexOf("@");
	var dp=x.lastIndexOf(".");
	
	
	if( ap<1 || dp<ap+2 || dp+2 >= x.length)
	{
		alert("Not a valid email id");
		t.focus();
	}
	
	
}


function chkmobno( t )
{
	if( t.value.length !=10 )
	{
		alert("Mobile number must have 10 digits !");
		t.focus();
	}
}
		
function minLength( t,len )
{
    
	var size=t.value.length;
	
	if( size < len )
	{
		alert("it must have "+len+" digits");
		t.focus();
	}
	
}
		
		


