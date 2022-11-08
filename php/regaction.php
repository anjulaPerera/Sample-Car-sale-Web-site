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
//checking connection
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
//inserting user input data into DB
	$sql = "INSERT INTO registration(firstname,lastname,nic,city,email,password) 
	VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[nic]','$_POST[city]','$_POST[email]','$_POST[password]')";
				
		if($conn->query($sql)===TRUE){
			echo "<script>alert('You have successfully registered')
		window.location.href='home.php'</script>";
		}
		
	$conn->close();
?>
