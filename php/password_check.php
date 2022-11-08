<?php
	session_start();


if($_SESSION['email']==NULL){
    echo "<script>alert('You have to Login First, Click OK to login')
		window.location.href='login.php'</script>";
}else{
   
    echo "<script>window.location.href='adform.php'</script>";
}



?>

