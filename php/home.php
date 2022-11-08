<?php
if(!isset($_SESSION)){
		session_start();
	}
?>
<html>

<head>
<title>Home Page</title>
<link rel="stylesheet" href="../css/styleshome.css">
</head>


<body>
	<header>
		<a href="home.php"><img class="logo" src="images/homelogo.png" alt="Logo"></a>
		<nav class="nav_links">
				<a href="login.php"><button class="login_btn">Login</button></a>
				<a href="regform.php"><button class="reg_btn">Register</button></a>
				<form method = "post" action="password_check.php"><button class="ad_btn">Post Ad</button></form>
				<form action="admin_check.php" method = "post"><button class="member_btn">View Members</button></form>
				<form action="login_check_list.php" method = "post"><button class="carlist_btn">Your Ads</button></form>
		</nav>
	</header>
	<footer class="footerLeft">
		Copyright © 2021
	</footer>
	<footer class="footerRight">
		
		Designed by Anjula
	</footer>
	
	
	<form action="search_results.php" method="post">
	<div class="searchBox">
		<h3>Find the Best Vehicle For You</h3>
		
		<select class="selectBtn1" name="brand">
		<option value="SELECTBRAND">Select Brand</option>
		<optgroup label="AMERICA">
			<option value="FORD">Ford</option>
			<option value="CHEVROLET">Chevrolet</option>
		</optgroup>
		<optgroup label="ENGLAND">
			<option value="LANDROVER">Land Rover</option>
			<option value="MINI">MINI</option>
		</optgroup>
		<optgroup label="GERMANY">
			<option value="BMW">BMW</option>
			<option value="AUDI">Audi</option>
			<option value="BENZ">Benz</option>
			<option value="PORSCHE">Porsche</option>
		</optgroup>
		<optgroup label="INDIA">
			<option value="SUZUKI">Suzuki</option>
			<option value="TATA">TATA</option>
			<option value="BAJAJ">Bajaj</option>
		</optgroup>
		<optgroup label="ITALY">
			<option value="FIAT">Fiat</option>
		</optgroup>
		<optgroup label="JAPAN">
			<option value="TOYOTA">Toyota</option>
			<option value="HONDA">Honda</option>
			<option value="NISSAN">Nissan</option>
			<option value="MITSUBISHI">Mitsubishi</option>
			<option value="MAZDA">Mazda</option>
			<option value="SUBARU">Subaru</option>
			<option value="SUZUKI">Suzuki</option>
			<option value="LEXUS">Lexus</option>
			<option value="DAIHATSU">Daihatsu</option>
			<option value="DATSUN">Datsun</option>
		</optgroup>
		<optgroup label="KOREA">
			<option value="KIA">KIA</option>
			<option value="HYUNDAI">Hyundai</option>
		</optgroup>
		<optgroup label="SRI LANKA">
			<option value="MICRO">Micro</option>
		</optgroup>
			
		</select>
		<select class="selectBtn2" name="type">
			<option value="SELECTTYPE">Select Type</option>
			<option value="SEDAN">Sedan</option>
			<option value="MINIVAN">Mini Van & Truck</option>
			<option value="SUV">SUV</option>
			<option value="HATCHBACK">Hatchback</option>
		</select>
		
		<br>
		<input class="searchBtn"type="submit" value="Search" name="submit">
	</div>
	</form>
	
<form method ="post" action="logout.php"><button class="logout_btn">Logout</button></form>

</body>

</html>