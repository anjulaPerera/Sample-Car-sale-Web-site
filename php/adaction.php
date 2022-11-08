<?php
	session_start();
?>
<?php	
//creating connection
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "19it513";
	
	$conn =new mysqli($dbservername,$dbusername ,$dbpassword,$dbname);
 
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
	
	// Get the name of images
  	$Get_image_name = $_FILES['file']['name'];
  	
  	// image Path
  	$image_Path = "uploads/".basename($Get_image_name);

  

  	
  
//inserting user input data into DB
	$sql = "INSERT INTO postad(brand,model,type,price,condition_of_car,description,file,f_nic) 
	VALUES('$_POST[brand]','$_POST[model]','$_POST[type]','$_POST[price]','$_POST[condition_of_car]','$_POST[description]','$Get_image_name','$_POST[f_nic]')";
				
		mysqli_query($conn, $sql);
		
	if (move_uploaded_file($_FILES['file']['tmp_name'], $image_Path)) {
  		echo "Your Image uploaded successfully";
  	}else{
  		echo  "No Image";
  	}
		
	$conn->close();

		
	header("Location: home.php?your.ad.posted.successfully");	
?>
