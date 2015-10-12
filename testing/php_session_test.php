<?php
	session_start();
	
	echo"<h3> PHP List all session Variables</h3>";
	foreach ($_SESSION as $key=>$val)
	echo $key ." ".$val."<br/>";
?>