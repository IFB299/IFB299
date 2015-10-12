<!DOCTYPE html>

<!--
Displays a form for the user to input the contractor number of a database record
that requires updating. Posts the response to contractor_modify.php.
-->

<html>

<head>
<meta content="en-au" http-equiv="Content-Language">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Contractor Management System - Update Existing Contractor</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Contractor Management System</h1>
<h2>Update Existing Contractor</h2>
<hr><hr>
<p class="information">Please enter the contractor number for the record that requires updating</p>

<form action="contractor_modify.php" method="post">
	<input name="contractorID" type="text"><input name="viewRecord" type="submit" value="View Record"></form>
<hr>
<p><a href="contractor_home.php">Return to Main Menu</a></p>

</body>

</html>
