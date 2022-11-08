<?php
session_start();

	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "19it513";
	
	$conn =new mysqli($dbservername,$dbusername ,$dbpassword,$dbname);
 
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
	
	if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	$password=$_SESSION['password'];
		
		$sql="SELECT firstname,email,password,nic,brand,model,type,price,condition_of_car,description,file,f_nic FROM registration,postad WHERE email='$email' AND password='$password' AND registration.nic=postad.f_nic";
		$result=mysqli_query($conn,$sql) or die('error');
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$imageURL='uploads/'.$row['file'];
				
				$brand=$row['brand'];
				$model=$row['model'];
				$type=$row['type'];
				$price=$row['price'];
				$condition_of_car=$row['condition_of_car'];
				$description=$row['description'];
				$file=$row['file'];
				$firstname=$row['firstname'];
				
				echo"<html>";
				echo"<head>";
				echo"<link rel='stylesheet' href='../css/stylelist.css'>";
				echo"</head>";
				echo"<body>";
				echo "<header> <a href='home.php'><img class='logo' src='images/homelogo.png' alt='Logo'></a></header>";
				echo "<div class='carlist'>";
				echo "<p>Brand: $brand</p>";
				echo "<p>Model: $model</p>";
				echo "<p>Type: $type</p>";
				echo "<p>Price: LKR $price</p>";
				echo "<p>Condition: $condition_of_car</p>";
				echo "<p>Description: $description</p>";
	
				?>
				<img id="img" src="<?php echo $imageURL; ?>" alt="" height="100" width="200"/>
				<?php

				echo "<p>Owner: $firstname</p>";
				echo "</div>";
				echo "<footer class='footerLeft'>";
				echo "Copyright © 2021";
				echo "</footer>";
				echo "<footer class='footerRight'>";
				echo "Designed by Anjula";
				echo "</footer>";
				echo "</body>";
				echo "</html>";
			}
		}else{
			echo"<script>alert('You have no Ads posted')
		window.location.href='home.php'</script>";;
				
			}
		
	}

?>