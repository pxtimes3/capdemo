<?php 
	$line = file_get_contents("../configfile");
        $creds = explode(" ",$line);
        $username = $creds[0];
        $password = $creds[1];
        $servername = $creds[2];
        $dbname = "capdemo";

/*
	$dbh = mysql_connect($servername, $username, $password) or die("Error: " . mysql_error());
	mysql_select_db($db_name);

	$email = $_POST["mail"];

	$result = mysql_query("INSERT INTO spamVictims (name, email) VALUES ('post','$mail')");
*/
	


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

	$mail = $_POST["mail"];
	$sql = "INSERT INTO spamVictims (name, email) VALUES ('post', '$mail')";

	$result = $conn->query($sql);

	if($result)
	{
		echo "<h1>success!</h1>";
	}
	else
	{
		echo "<h1>poop</h1>";
		echo $mail;
	}
	
	$conn->close();

	header('Location: /index.php?success=true');

?>

