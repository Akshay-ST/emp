<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="veiwport" contents="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "ast";
		$password = "888929";
		$dbname = "test";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$name = $_POST['name'];
	    $salary = $_POST['salary'];		
		$sql = "insert into emp(name,salary) values('". $name . "','" . $salary . "');";
		if($conn->query($sql) == TRUE) {
			//echo $sql;
			$conn->close();
			header("Location: Add2db.html");
		}else{
			echo "Error: ".$sql."<br>".$conn->error;
			$conn->close();
		}
	?>
</body>
</html>