<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "IFB299";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		
		
		
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['address']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
		
			$query = mysql_query("SELECT * FROM $table WHERE Username='$user'");
			if(mysql_num_rows($query) > 0)
			{
				echo 'Username already taken';
			}
			else
			{
				mysql_query("INSERT INTO $table (FirstName, LastName, Username, Password, Email, PhoneNumber, Address) VALUES ('$fname', '$lname', '$user', '$pass', '$email', '$phone', '$address')"); 
				echo("User created successfully");
			}
		}
		
		mysql_close();
?>

<html>
	<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="main">
		<div id="banner">

		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="suppliers.php">Suppliers</a></li>
				<li><a href="members.php">Members</a></li>
			</ul>
		</div>
  
	<h1>Signup</h1>
	<form action="new_user.php" method="POST">
		<p>First Name:</p><input type="text" name="fname" />
		<p>Last Name:</p><input type="text" name="lname" />
		<p>Username:</p><input type="text" name="user" />
		<p>Password:</p><input type="password" name="pass" />
		<p>Email:</p><input type="text" name="email" />
		<p>Phone Number:</p><input type="text" name="phone" />
		<p>Address:</p><input type="text" name="address" />
		<br />
		<input type="submit" value="Signup" />
	</form>
	</div>
	<div id="footer">
    
	</div>
	</body>
</html>