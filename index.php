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
	

 <h3>Welcome to Spambot 3000</h3>
<p>Insert e-mail of spam victims:

<?php
        $instance_id =
file_get_contents("http://instance-data/latest/meta-data/instance-id");
        print("Instance ID: $instance_id");
?>


<p>Current list of spam victims:</p>
<?php

$sql = "SELECT email FROM spamVictims;
$result = $conn->query($sql);

if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                echo "<p> count: " . $row["nbr"] . "<br>";
        }
}
?>

</body>
</html>
