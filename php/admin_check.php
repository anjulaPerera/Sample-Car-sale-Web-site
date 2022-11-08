<?php
	session_start();


if($_SESSION['password']!= 'admin'){
    echo "<script>alert('You have no Admin priviledges to view this page')
		window.location.href='home.php'</script>";
}else{
   
    echo "<script>window.location.href='memberlist.php'</script>";
}



?>
