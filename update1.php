<?php
		$servername = "localhost";
		$username = "ast";
		$password = "888929";
		$dbname = "test";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$eid = $_POST['eid'];
		$name = $_POST['name'];
		$salary = $_POST['salary'];
		
		$sql = "update emp set name= '" .$name. "' ,salary= '" .$salary. "' where Emp_id=" .$eid;
		if($conn->query($sql) == TRUE) {
			//echo $sql;
			$conn->close();
			header("Location: show.php");
		}else{
			echo "Error: ".$sql."<br>".$conn->error;
			$conn->close();
		}
	?>


