<?php

//Connection to MySQL
$username = "root";
$password = "team5";
$hostname = "localhost";
$database = "IFB299";
$table = "Contractors";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
$selecttable = mysql_select_db($database, $dbhandle);


//Form variables for submission to database
$businessName = $_POST['businessName'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$contactName = $_POST['contactName'];
$phoneNumber = $_POST['phoneNumber'];
$emailAddress = $_POST['emailAddress'];
$notes = $_POST['notes'];

//Insert new company into the database
mysql_query("INSERT INTO $table (businessName, street, suburb, postcode, contactName, phoneNumber, emailAddress, notes) VALUES ('$businessName', '$street', '$suburb', '$postcode', '$contactName', '$phoneNumber', '$emailAddress', '$notes')");
mysql_close();
header("Location:contractor_add.php?success=1");
 

?>