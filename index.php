<?php 
	session_start();
	if(!isset($_SESSION['logged_in']))
	{
		$_SESSION['index_visited'] = true;
		$_SESSION['logged_in'] = false;
		$_SESSION['Username'] = " ";
		$_SESSION['user_type'] = " ";
	}
	
	// Test to see if pages change dempending on user_type (remove when no longer needed)
	//$_SESSION['user_type'] = "Manager";
	
	header("location:home.php");
?>