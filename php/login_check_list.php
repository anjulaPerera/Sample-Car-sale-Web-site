<?php
	session_start();


if($_SESSION['email']==NULL){
    echo "<script>alert('You have to Login First, to view your Ads')
		window.location.href='home.php'</script>";
}else{
   
    echo "<script>window.location.href='carlist.php'</script>";
}



?>

