<?php
	session_start();
?>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="../css/stylereg.css">
</head>


<body>
<header>
		<a href="home.php"><img class="logo" src="images/homelogo.png" alt="Logo"></a>
</header>
<div class="reg-form">
	<h1>Register as a Member</h1>
	<div class="textbox">
<form method="post" action="regaction.php">
	<div class="textbox">
		<input type="text" placeholder="First name" name="firstname" value="">
	</div>

	<div class="textbox">
		<input type="text" placeholder="Last name" name="lastname" value="">
	</div>

	<div class="textbox">
		<input type="text" placeholder="NIC" name="nic" value="">
	</div>
	
	<div class="textbox">
		<input type="text" placeholder="City" name="city" value="">
	</div>
	
	<div class="textbox">
		<input type="text" placeholder="E-mail" name="email" value="">
	</div>
	
	<div class="textbox">
		<input type="password" placeholder="Password" name="password" value="">
	</div>
<input class="btn" type="submit" name="" value="Register">
</form>
</div>
</div>

<div class="footer">
	<footer class="footerLeft">
		Copyright © 2021
	</footer>
	
	<footer class="footerRight">
		Designed by Anjula
	</footer>
</div>
</body>
</html>