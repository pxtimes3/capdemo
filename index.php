<html>
<body>

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

<?php
	$line = file_get_contents("../configfile");
	$creds = explode(" ",$line);
	echo $creds[0];
	echo $creds[1];
	echo $creds[2];
?>

</body>
</html>
