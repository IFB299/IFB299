<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Contractor Management System - Search</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Contractor Management System</h1>
<h2>Search by Postcode</h2>
<hr><hr>
<p class="information">Enter a postcode to view all contractors located in that area.</p>
<form action="contractor_search_results.php?option=2" method="post">
	<table>
		<tr>
			<td>Enter Postcode:</td>
			<td>
			<input maxlength="45" name="searchBox" required="" type="text" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="clearButton" type="reset" value="Clear" /><input name="searchButton" type="submit" value="Search" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="contractor_home.php">Return to Main Menu</a></p>

</body>

</html>
