<?php
        $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "IFB299db";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);

        $myusername = $_POST['user'];
        $mypassword = $_POST['pass'];

        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);

        $query = "SELECT * FROM $table WHERE username='$myusername' and password='$mypassword'";
        $result = mysql_query($query);
        $count = mysql_num_rows($result);

        mysql_close();

        if($count==1)
        {
			$seconds = 86400 + time();
			setcookie(loggedin, date("F jS - g:i a"), $seconds);
			header("location:login_success.php");
        }
		else
		{
			echo 'Incorrect username or password';
		}

?>
