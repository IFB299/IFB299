<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Contractor Management System - Add New Contractor</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Contractor Management System</h1>
<h2>Add New Contractor</h2>
<hr><hr>
<p class="information">Please complete the form to add a new contractor. All fields 
with * are required to be completed.</p>
<?php
	//code checks to see if field in the form has been posted, if correct all following code executes
    if (isset($_POST['businessName'])) {
        //Connection to MySQL
        $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "IFB299db";
        $table = "Contractors";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);


        //Form variables for submission to database
        $inputs = array(
            $_POST['businessName'],
            $_POST['street'], $_POST['suburb'],
            $_POST['state'],
            $_POST['postcode'],
            $_POST['contactName'],
            $_POST['phoneNumber'],
            $_POST['emailAddress'],
            $_POST['notes']);

        for ($i = 0; $i < count($inputs); $i++) {
            $inputs[$i] = mysql_real_escape_string($inputs[$i]);
        }
        //Insert new company into the database and return success=1

        mysql_query("INSERT INTO $table (businessName, street, suburb, state, postcode, contactName, phoneNumber, emailAddress, notes) VALUES ('$inputs[0]', '$inputs[1]', '$inputs[2]', '$inputs[3]', '$inputs[4]', '$inputs[5]', '$inputs[6]', '$inputs[7]', '$inputs[8]')");
        mysql_close();
        header("Location:contractor_add.php?success=1");
    }
    
    //error and success messages for add operation. Error message currently not used as form fields are checked by html value.
    //may change this if we need to implement further validation checks on the data.
    ?><em class="successful"><?php
        if (isset($_GET["success"])) {
            $success = $_GET['success'];
            if ($success == "1") {
                echo ("Contractor Added Successfully!");
            }
        }
        ?></em><em class="unsuccessful"><?php
        if (isset($_GET["success"])) {
            $success = $_GET['success'];
            if ($success == "0") {
                echo ("Error! Unsuccessful, Please try again!");
            }
        }
        ?></em>
<form action="contractor_add.php" method="post">
	<table>
		<tr>
			<td>Business Name:</td>
			<td>
			<input maxlength="45" name="businessName" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Street Number &amp; Street Name:</td>
			<td><input maxlength="45" name="street" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Suburb:</td>
			<td><input maxlength="45" name="suburb" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>State:</td>
			<td><input maxlength="3" name="state" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Postcode:</td>
			<td><input maxlength="4" name="postcode" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Contact Name:</td>
			<td>
			<input maxlength="45" name="contactName" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td>
			<input maxlength="10" name="phoneNumber" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><input maxlength="45" name="emailAddress" type="text" /></td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><textarea name="notes"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="addButton" type="submit" value="Add New Record" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="contractor_home.php">Return to Main Menu</a></p>

</body>

</html>
