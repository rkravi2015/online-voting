<?php
@session_start();
	unset($_SESSION['voter']);
	ob_start();
	echo "<script type='text/javascript'>alert('logged out!please login again!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
?>