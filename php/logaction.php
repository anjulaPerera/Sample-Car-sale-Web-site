<?php
	if(!isset($_SESSION)){
		session_start();
	}
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
	
	
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["password"] = $_POST["password"];
	
	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	
	$sql = "SELECT * FROM registration WHERE email = '$email' AND password='$password'";
	$result = $conn->query($sql);
	
	
	if($result->num_rows>0){
        echo"<script>alert('Login Successfull,You can post your Ads now-Click Post Ad')
		window.location.href='home.php'</script>";
	}else {
		$admin = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
		$result_admin = $conn->query($admin);
		
		if($result_admin->num_rows>0){
			echo "<script>alert('Login Successfull as Admin')
		window.location.href='home.php'</script>";
		}else{
		echo"<script>alert('Either you are not a registered user, or entered password is incorrect')
		window.location.href='home.php'</script>";
	}
	}
	
	if(!empty($_POST["remember_me"])) {
	setcookie ("email",$_POST["email"],time()+ 3600*24);
	setcookie ("password",$_POST["password"],time()+ 3600*24);
} else {
	setcookie("email","");
	setcookie("password","");
}
?>
