<?php

	$mail="noushin@gmail.com";
?>
<html>

	<body>
	<head>
	<style>
	div.pp
		{
			padding-left: 25px;
			padding-top: 10px;
		}
		
		div.mail
		{
			padding-right: 25px;
			padding-bottom: 10px;
		}
		
		.dropbtn
		{
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
		}

	.dropdown
		{
    position: relative;
    display: inline-block;
		}

	.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 300px;
    box-shadow: 0px 12px 300px 0px rgba(0,0,0,0.2);
    z-index: 1;
		}

	.dropdown-content a {
    color: black;
    padding: 12px 30px;
    text-decoration: none;
    display: block;
		}

	.dropdown-content a:hover {background-color: #f1f1f1}

	.dropdown:hover .dropdown-content {
    display: block;
		}

	.dropdown:hover .dropbtn {
    background-color: #3e8e41;
	}
	</style>
	</head>
	<body>
	<form method="post">
	
	<div class="pp">  <h1>tutorsHUB</h1> </div>
	
		
		<div class="mail" align="right">
		<table>
		<tr>
			<td> <?php echo $mail; ?>
			</td>
			<td>&nbsp;</td>
			
			
			
			<td>
			 <input type="button" onClick="location.href='homepage.php'" value='LogOut'>
			
			</td>
		
		</tr>
		
		</table>
	
	</div>
	<hr>
	
		
		<br>
		<div align="center">
			<div  style="float:left; width:350px; border-right:2px solid #666666; margin-right:10px; ">
				<div class="dropdown" style="width:300px;">
			  <button class="dropbtn" style="width:300px;">Profile</button>
			  <div class="dropdown-content">
				<a href="http://localhost/project/mywork/viewtutor.php">View profile</a>
				<a href="#">Edit profile</a>
				
				</div>
			</div>
				
		
				<br>
				<br>
			<div class="dropdown" style="width:300px;">
			  <button class="dropbtn" style="width:300px;">Exam </button>
			  <div class="dropdown-content">
				<a href="#">Bangla</a>
				<a href="#">English</a>
				
			  </div>
			</div>
			
			
			<br/>
			<br/>
			
			
		</div>	
		
		
			<div style="float:left; width:600px; ">Schedule</div>
			
		</div>		
		
		
	</form>
	</body>
	
</html>
		