<?php
	session_start();
?>
<html>
<head>
<title>Post Ad</title>
<link rel="stylesheet" href="../css/stylead.css">
</head>


<body>
	<header>
		<a href="home.php"><img class="logo" src="images/homelogo.png" alt="Logo"></a>
	</header>
	
<div class="ad-form">
	<h1>Sell your Car</h1>
	<p>*All fields are Mandatory</p>
	
<form method="post" action="adaction.php" enctype="multipart/form-data">
	<div class="textbox">
		<select class="searchBtn1" name="brand">
		<option value="selectBrand">Select Brand</option>
		<optgroup label="America">
			<option value="ford">Ford</option>
			<option value="chevrolet">Chevrolet</option>
		</optgroup>
		<optgroup label="England">
			<option value="landrover">Land Rover</option>
			<option value="mini">MINI</option>
		</optgroup>
		<optgroup label="Germany">
			<option value="bmw">BMW</option>
			<option value="audi">Audi</option>
			<option value="benz">Benz</option>
			<option value="porsche">Porsche</option>
		</optgroup>
		<optgroup label="India">
			<option value="suzuki">Suzuki</option>
			<option value="tata">TATA</option>
			<option value="bajaj">Bajaj</option>
		</optgroup>
		<optgroup label="Italy">
			<option value="fiat">Fiat</option>
		</optgroup>
		<optgroup label="Japan">
			<option value="Toyota">Toyota</option>
			<option value="honda">Honda</option>
			<option value="nissan">Nissan</option>
			<option value="mitsubishi">Mitsubishi</option>
			<option value="mazda">Mazda</option>
			<option value="subaru">Subaru</option>
			<option value="suzuki">Suzuki</option>
			<option value="lexus">Lexus</option>
			<option value="daihatsu">Daihatsu</option>
			<option value="datsun">Datsun</option>
		</optgroup>
		<optgroup label="Korea">
			<option value="kia">KIA</option>
			<option value="hyundai">Hyundai</option>
		</optgroup>
		<optgroup label="Sri Lanka">
			<option value="micro">Micro</option>
		</optgroup>
		</select>
		</div>	
	<div class="textbox">
		<input type="text" placeholder="Model" name="model" value="" )>
	</div>
	
	<div class="textbox">
		<select class="carType" name="type">
			<option value="selectType">Select Type</option>
			<option value="Sedan">Sedan</option>
			<option value="minivan">Mini Van & Truck</option>
			<option value="suv">SUV</option>
			<option value="hatchback">Hatchback</option>
		</select>
	</div>
	<div class="textbox">
		<input type="text" placeholder="Price" name="price" value="" >
	</div>

	
	<div class="textbox">
		<select class="condition" name="condition_of_car">
			<option value="selectCondition">Select Condition</option>
			<option value="Registered">Unregistered</option>
			<option value="Unregistered">Registered</option>
		</select>
	</div>
	
	<div class="textbox1">
		<input type="text" placeholder="Description" name="description" value="">
	</div>
	
	
	<div class="textbox">
		<input type="text" placeholder="NIC" name="f_nic" value="">
	</div>
	
	
	<div class="textbox">
	<input type="file" class="uploadBtn" name="file" title="">
	</div>
	
<input class="btn" type="submit" name="" value="Post Ad" />	
</form>
</div>



	<footer class=footerLeft>
		Copyright © 2021
	</footer>
	
	<footer class=footerRight>
		Designed by Anjula
	</footer>


</body>

</html>


