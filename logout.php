<?php
session_start();
 	session_destroy();
 	unset($_SESSION['user']);

 	echo '<script>alert("You are now Logged Out")</script>';
		echo '<script>window.location="index.php"</script>';
?> 