

<?php

include_once('navbar.php');

$refno=$_REQUEST['sino'];
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="signup.css" />

<script src="jquery-1.11.0.js">
</script>
</head>

<body>
<div id=form class="container bg-info" >

<form name=f1   id=f1 method=post  action=savestuff.php enctype="multipart/form-data"  >
<input type=hidden name=hrefno value=<?php echo $refno ?> id=hrefno />

<label>Add Caption</label>
<input type=text name=caption required id=caption  />
<br/>

<label>Choose an Image</label>
<input type=file name=imgname required=required  id=imgname />
<br/>
<label>
Add Description
</label>

<textarea name=descri id=descri rows=5 required ></textarea>
<br/>
<input type=submit value=" UPLOAD "  name=submit id=submit />
</form>
</div>




</body>
</html>