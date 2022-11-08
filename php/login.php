<?php
	session_start();
?>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="../css/stylelogin.css">
</head>


<body>
<header>
		<a href="home.php"><img class="logo" src="images/homelogo.png" alt="Logo"></a>
</header>

<div class="login-box">
		<h1>Login</h1>
		
	<div class="textbox">
		<form method="post" action="logaction.php">
			<div class="emailbox">
				<input type="text" placeholder="E-mail" name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
			</div>

			<div class="passwordbox">
				<input type="password" placeholder="Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
			</div>
	
			<div class="checkbox">
				<input type="checkbox" class="checkbox" name="remember_me" value="login">
				<label for="remember_me">Remember me</label><br>
			</div>
		
			<div class="submitbox">
				<input class="submit" type="submit" name="" value="Login">
			</div>
			
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