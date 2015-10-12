<!--
This page displays a form to the user requesting a postcode
this input is then posted to search_results.php?option=2.
-->

<?php require("../templates/header_sub.php"); ?>

<title>Contractor Management System - Search</title>
<link rel="stylesheet" href="../css/style.css">

<h1>Contractor Management System</h1>
<h2>Search by Postcode</h2>
<hr><hr>
<p class="information">Enter a postcode to view all contractors located in that area.</p>
<form action="search_results.php?option=2" method="post">
	<table>
		<tr>
			<td>Enter Postcode:</td>
			<td>
			<input maxlength="45" name="searchBox" required="" type="text" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="searchButton" type="submit" value="Search" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="../contractor.php">Return to Main Menu</a></p>

<?php require("../templates/footer.php"); ?>