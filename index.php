
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


</body>
</html>
