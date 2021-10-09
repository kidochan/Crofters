<?php
	session_start();
	


	$sql = "SELECT * FROM tbl_login WHERE username = '".$_SESSION['tbl_login']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>