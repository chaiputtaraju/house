
<?php
	session_start();
	if( isset( $_SESSION['uname'] ) )
	{
		$uname=$_SESSION['uname'];
		$fname=$_SESSION['fname'];
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Search Roof</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.0.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	
	
	<style>
	
	body{
	 background: url(img/bg.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    height:100%;
	
	}
	</style>
	
	</head>
	
    <body  >
	
	
	
	
	<nav class="navbar navbar-default navbar-inverse" style="opacity:1.0;">
  <div class="container-fluid"  >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Search Roof</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="login.php">Login</a></li>
	   <li><a href="signup.php">Signup</a></li>
		 <li><a href="searchhouse.php">Search house</a></li>
		 
		 <?php
		 if( isset($fname) )
		 {
		 ?>
		 <li><a href=#><font color=yellow>Welcome - <?php echo $fname ?> </font></a></li>
		 <?php
		 }
		?>	
		
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="displayads.php?purpose=RENT">RENT</a></li>
			  <li role="separator" class="divider"></li>
            <li><a href="displayads.php?purpose=LEASE">LEASE</a></li>
			
			<li role="separator" class="divider"></li>
            <li><a href="displayads.php?purpose=SALE">SALE</a></li>
			<li role="separator" class="divider"></li>
			<li>
		<a href="displayads.php?purpose=COMMERCIAL">COMMERCIAL</a>
		</li>
          </ul>
        </li>
		
       <li><a href="feedback.php">Feedback</a></li>
		
      </ul>
      
	  
		<?php
		
		if( isset( $fname ) )
		{
		?>
		
		<ul class="nav navbar-nav navbar-right">
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit Profile</a></li>
			  <li role="separator" class="divider"></li>
            <li><a href="viewstuff.php">View Stuff</a></li>
			
			<li role="separator" class="divider"></li>
            <li><a href="postad.php">Post Ad</a></li>
			<li role="separator" class="divider"></li>
			<li>
			<a href="logout.php">Logout</a>
			</li>
          </ul>
        </li>
		
		</ul>
		
		<?php } ?>
		
		
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
		
	