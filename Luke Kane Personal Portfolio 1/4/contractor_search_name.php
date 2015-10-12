<!--
Displays a form to allow contractor database to be searched by business name
gets the input and posts to contractor_search_resuls.php?option1
-->
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Contractor Management System - Search</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Contractor Management System</h1>
<h2>Search by Business Name</h2>
<hr><hr>
<p class="information">Enter the contractors business name to conduct a search.</p>
<form action="contractor_search_results.php?option=1" method="post">
	<table>
		<tr>
			<td>Enter Name:</td>
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
<p><a href="contractor_home.php">Return to Main Menu</a></p>

</body>

</html>
