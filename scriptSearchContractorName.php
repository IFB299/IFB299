<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-au" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Contractor Management System - Search</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>Contractor Management System</h1>
<h2>Search Results</h2>
<p>
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
$searchBox = $_POST['searchBox'];

//Insert new company into the database and return success=1
$query = "SELECT * FROM $table WHERE businessName LIKE '%$searchBox%'";
$result = mysql_query($query);
$rows = mysql_num_rows($result);

//Loop created to iterate through mysql results and display them in a table
$i=0;
echo "<table>";
while($i < $rows){

$contractorID = mysql_result($result,$i,"contractorID");
$businessName = mysql_result($result,$i,"businessName");
$street = mysql_result($result,$i,"street");
$suburb = mysql_result($result,$i,"suburb");
$state = mysql_result($result,$i,"state");
$postcode = mysql_result($result,$i,"postcode");
$contactName = mysql_result($result,$i,"contactName");
$phoneNumber = mysql_result($result,$i,"phoneNumber");
$emailAddress = mysql_result($result,$i,"emailAddress");
$notes = mysql_result($result,$i,"notes");
echo "<tr><td><b>Contractor ID:</b></td><td>$contractorID</td></tr>
<tr><td><b>Business Name:</b></td><td>$businessName</td></tr> 
<tr><td><b>Address:</b></td><td>$street, $suburb, $state $postcode</td></tr>
<tr><td><b>Contact Name:</b></td><td>$contactName</td></tr>
<tr><td><b>Phone Number:</b></td><td>$phoneNumber</td></tr> 
<tr><td><b>Email Address:</b></td><td>$emailAddress</td></tr>
<tr><td><b>Notes:</b></td><td>$notes</td></tr>
<tr><td><br/></td></tr>
<tr><td><br/></td></tr>";
		
$i++;

}
echo "</table>";
mysql_close();

?>
</p>
<p><a href="contractor_search_name.php">Search Again by Name</a></p>
<p><a href="contractor_home.php">Contractor Management System Home</a></p>
</body>
</html>