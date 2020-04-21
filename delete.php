<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="veiwport" contents="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="0; url=http://localhost/A/Emp_php/show.php" />
</head>
<body style="background-image:url('img1.jpg')">
	<?php
		$servername = "localhost";
		$username = "ast";
		$password = "888929";
		$dbname = "test";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$eid=$_GET['eid'];
		$sql = 'delete from emp where Emp_id='.$eid;
		$conn->query($sql);
	?>
</body>
</html>
