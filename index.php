<html>
<body>

<?php
	$line = file_get_contents("../configfile");
	$creds = explode(" ",$line);
	$username = $creds[0];
	$password = $creds[1];
	$servername = $creds[2];
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
	


<?php echo
        '<p>Hello world</p>';
?>

<?php
        $instance_id =
file_get_contents("http://instance-data/latest/meta-data/instance-id");
        print("Instance ID: $instance_id");
?>

<div>
<div>


</body>
</html>
