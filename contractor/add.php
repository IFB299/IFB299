<?php require("../templates/header.php"); ?>

<title>Contractor Management System - Add New Contractor</title>
<link rel="stylesheet" href="../css/style.css">

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
        $database = "ifb299db";
        $table = "contractors";

        $connection = mysqli_connect($hostname, $username, $password, $database);
        if (!$connection){
        	die("Connection failed: " . mysqli_connect_error());
        }

        //Form variables for submission to database
            $businessName = mysqli_real_escape_string($connection, $_POST['businessName']);
            $street = mysqli_real_escape_string($connection, $_POST['street']); 
            $suburb = mysqli_real_escape_string($connection, $_POST['suburb']);
            $state = mysqli_real_escape_string($connection, $_POST['state']);
            $postcode = mysqli_real_escape_string($connection, $_POST['postcode']);
            $contactName = mysqli_real_escape_string($connection, $_POST['contactName']);
            $phoneNumber = mysqli_real_escape_string($connection, $_POST['phoneNumber']);
            $emailAddress = mysqli_real_escape_string($connection, $_POST['emailAddress']);
            $notes = mysqli_real_escape_string($connection, $_POST['notes']);

        //Insert new company into the database and return success=1

        $query = "INSERT INTO $table (businessName, street, suburb, state, postcode, contactName, phoneNumber, emailAddress, notes) VALUES ('$businessName', '$street', '$suburb', '$state', '$postcode', '$contactName', '$phoneNumber', '$emailAddress', '$notes')";
        
		mysqli_query($connection, $query);        
        mysqli_close($connection);
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
<form action="add.php" method="post">
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
<p><a href="../contractor.php">Return to Main Menu</a></p>

<?php require("../templates/footer.php"); ?>
