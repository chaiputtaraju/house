
<div id=wrapper >

		<div id=banner class=st1>
		<p >Online House Brokerage System</p>
		</div>
		
		<div id=message>
		<b> <?php if( isset($uname) ){ echo"Hi .... - <font color=red>$fname </font>,"; }  ?>WELCOME TO OUR SITE </b>
		
		<?php
		
		if( isset( $uname ) )
		{
	
		?>
		
		<span style="float:right; padding-right:20px; ">
		<font color=blue><b>Logged User : </font>
		<?php echo $uname?>
		</b>
		</b>
		</span>
		<?php
		}
		?>
		</div>
		
		
		
		
		<div id=leftsidebar >
		
		<ul>
		<li><a href=index.php?page=displayads.php&purpose=RENT>RENT</a></li>
		<li><a href=index.php?page=displayads.php&purpose=LEASE>LEASE</a></li>
		<li><a href=index.php?page=displayads.php&purpose=SALE>SALE</a></li>
		<li><a href=index.php?page=displayads.php&purpose=COMMERCIAL>COMMERCIAL</a></li>
		<li><a href=index.php?page=searchhouse.php>SEARCH</a></li>
		
		<li><a href=index.php?page=viewuvideo.php>Demo Video For House Seekers</a></li>
		</ul>
		
		</div>
		