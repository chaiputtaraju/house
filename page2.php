		<div id=rightsidebar>
		
		<ul>
		<?php
		if( isset( $uname ) )
		{
		?>
		<li><a href=?page=editprofile.php >EDIT PROFILE</a></li>
		<li><a href=index.php?page=viewstuff.php>VIEW STUFF</a></li>
		<li><a href=?page=postad.php  >POST YOUR AD</a></li>
		<li><a href=logout.php>LOGOUT</a></li>
		<?php
		}
		else
		{
		?>
		<li><a href=?page=login.php >LOGIN</a></li>
		<li><a href=index.php?page=signup.php >SIGNUP</a></li>
		<li><a href=?page=postad.php  >POST YOUR AD</a></li>
		
		<?php
		}
		?>
		
		<li><a href=index.php?page=viewovideo.php>Demo Video For House Owners</a></li>
		</ul>
		<br/><br/>
		<?php
		
		if( isset($_SESSION['nodays']))
		{
		
		echo "<center><b><font color=white><p style='align:justify;'>Your ad will be displayed for further:- $_SESSION[nodays] Days</b></p></font></center>";
		}
		
		?>
		</div>
		
		<div id=footer>
		&copy; All Rights Reserved
		</div>
</div>
