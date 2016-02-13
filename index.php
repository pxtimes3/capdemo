<html>
<body>

<?php
	$line = file_get_contents("../configfile");
	$creds = explode(" ",$line);
	$username = $creds[0];
	$password = $creds[1];
	$servername = $creds[2];
	$dbname = "capdemo";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
	

<h3>Welcome to Spambot 2000</h3>
<?php
        $instance_id =
file_get_contents("http://instance-data/latest/meta-data/instance-id");
        echo "<p> Instance ID: " . $instance_id;
?>

<hr>
<h4>Insert e-mail of spam victim:</h4>

<form action="post.php" method="POST">
	<div>
		E-mail:<br>
		<input type=text name="mail">
		<input type=submit />
</form>

<p>Current list of spam victims:</p>
<?php

$sql = "SELECT email FROM spamVictims";
if(!$result = $conn->query($sql)){
	echo "spamVictims is off the grid!\n".$conn->error."\n";
	die();
} else {
	if($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                	echo $row["email"] . "<br>";
	        }
	}
}
$conn->close();

?>

<?php
if ($_GET['run']) {
	shell_exec("/var/www/html/stress.sh");
	}
?>


<a href="?run=true"><img src="spam.jpg" width="200"></a>

</body>
</html>
