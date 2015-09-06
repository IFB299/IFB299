<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css">
</head>
<?php
	$rows = 0;
	if (isset($_POST['contractorID'])) {
	
	    //Connection to MySQL
		$username = "root";
		$password = "team5";
		$hostname = "localhost";
		$database = "IFB299db";
		$table = "Contractors";
	
		$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
		$selecttable = mysql_select_db($database, $dbhandle);
	
		$contractorID = mysql_real_escape_string($_POST['contractorID']);
		$query = "SELECT * FROM $table WHERE contractorID = '$contractorID'";
		$result = mysql_query($query);
		$rows = mysql_num_rows($result);
		
		if ($rows > 0){
			$businessName = mysql_result($result, 0, "businessName");
			$street = mysql_result($result, 0, "street");
			$suburb = mysql_result($result, 0, "suburb");
			$state = mysql_result($result, 0, "state");
			$postcode = mysql_result($result, 0, "postcode");
			$contactName = mysql_result($result, 0, "contactName");
			$phoneNumber = mysql_result($result, 0, "phoneNumber");
			$emailAddress = mysql_result($result, 0, "emailAddress");
			$notes = mysql_result($result, 0, "notes");
		}
	
		mysql_close();
	}

?>

<body>

<h1>Contractor Management System</h1>
<h2>Update Existing Contractor</h2>
<hr><hr>
<p class="information">Please change the required information and press the 'Update Record' button. All fields with a * require information for the update to be successful!</p>

<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "1") {
				echo ("Contractor Updated Successfully!");
			}
	}  ?></em>
<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error! Unsuccessful, Please try again!");
			}
	} ?></em>

<form action="contractor_modify_execute.php?record=<?php echo $contractorID?>" method="post">
	<table <?php if($rows == 0) echo 'hidden="hidden"'?> >
	<?php if($rows == 0 && !isset($_GET["success"])) echo '<em class="unsuccessful">Error! no records found, please check the record number and try again.</em>';?>
		<tr>
			<td>Business Name:</td>
			<td>
			<input maxlength="45" name="businessName" required="" type="text" value="<?php echo $businessName ?>" />*</td>
		</tr>
		<tr>
			<td>Street Number &amp; Street Name:</td>
			<td><input maxlength="45" name="street" required="" type="text" value="<?php echo $street ?>" />*</td>
		</tr>
		<tr>
			<td>Suburb:</td>
			<td><input maxlength="45" name="suburb" required="" type="text" value="<?php echo $suburb ?>" />*</td>
		</tr>
		<tr>
			<td>State:</td>
			<td><input maxlength="3" name="state" required="" type="text" value="<?php echo $state ?>" />*</td>
		</tr>
		<tr>
			<td>Postcode:</td>
			<td><input maxlength="4" name="postcode" required="" type="text" value="<?php echo $postcode ?>" />*</td>
		</tr>
		<tr>
			<td>Contact Name:</td>
			<td>
			<input maxlength="45" name="contactName" required="" type="text" value="<?php echo $contactName ?>" />*</td>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td>
			<input maxlength="10" name="phoneNumber" required="" type="text" value="<?php echo $phoneNumber ?>" />*</td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><input maxlength="45" name="emailAddress" type="text" value="<?php echo $emailAddress ?>" /></td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><textarea name="notes" ><?php echo $notes ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="updateButton" type="submit" value="Update Record" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="contractor_home.php">Return to Main Menu</a></p>


</body>

</html>
