<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../css/stylemember.css">
</head>
<body>
<header>
		<a href="home.php"><img class="logo" src="images/homelogo.png" alt="Logo"></a>
	</header>
<?php
$conn=mysqli_connect("localhost","root","","19it513");

$sql = "SELECT firstname,lastname,nic,email FROM registration ";
$result = $conn->query($sql);
if($result->num_rows > 0){
	
	echo "<div class='title'>
	<h1>Registered Members</h1>
	</div>";
		while($row = $result->fetch_assoc()){
			
			echo "<div class='member'>";
			echo "<h3>Name: ".$row['firstname']." ".$row['lastname']."</h3>";
			echo "<p>NIC: ".$row['nic']."<p>";
			echo "<p>Email: ".$row['email']."<p>";
			echo "<hr class='line'>";
			echo "</div>";
		}
		
	}else {
		echo "<script>alert('There are no Registered members')
		window.location.href='home.php?returened.to.homepage'</script>";
	}
	
$conn->close();

?>
</body>
</html>