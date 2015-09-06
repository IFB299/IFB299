<?php
	$contractorID = $_GET["record"];
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
            $_POST['street'], 
            $_POST['suburb'],
            $_POST['state'],
            $_POST['postcode'],
            $_POST['contactName'],
            $_POST['phoneNumber'],
            $_POST['emailAddress'],
            $_POST['notes']);
        for ($i = 0; $i < count($inputs); $i++) {
            $inputs[$i] = mysql_real_escape_string($inputs[$i]);
        }
        //update the records with sql query
        $query = "UPDATE $table SET businessName='$inputs[0]', street='$inputs[1]', suburb='$inputs[2]', state='$inputs[3]', postcode='$inputs[4]', contactName='$inputs[5]', phoneNumber='$inputs[6]', emailAddress='$inputs[7]', notes='$inputs[8]' WHERE contractorID ='$contractorID'";
		echo $query;
       mysql_query($query);
       mysql_close();
       header("Location:contractor_modify.php?success=1");
    }else{
    	header("Location:contractor_modify.php?success=0");
    }
?>



