<!--
Displays a form for the user to input the contractor number of a database record
that requires updating. Posts the response to modify.php.
-->


<?php require("../templates/header_sub.php"); ?>

<title>Contractor Management System - Update Existing Contractor</title>
<link rel="stylesheet" href="../css/style.css">

<h1>Contractor Management System</h1>
<h2>Update Existing Contractor</h2>
<hr><hr>
<p class="information">Please enter the contractor number for the record that requires updating</p>

<form action="modify.php" method="post">
	<input name="contractorID" type="text"><input name="viewRecord" type="submit" value="View Record"></form>
<hr>
<p><a href="../contractor.php">Return to Main Menu</a></p>

<?php require("../templates/footer.php"); ?>