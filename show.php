<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="veiwport" contents="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>All Employee</title>
	<link rel="stylesheet" href="mystyle.css"/>
</head>
<body style="background-image:url('img1.jpg')">
	<table class="table table-dark table-hover">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Salary</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
		<?php
			$servername = "localhost";
			$username = "ast";
			$password = "888929";
			$dbname = "test";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			$sql = "select * from emp";
			$result = $conn->query($sql);
			if ($result -> num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    //foreach($row in $result){
			    	echo "<tr>";
			        echo "<td>" . $row["Emp_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["salary"] . "</td>";
			        echo "<td><a href=" . "delete.php?eid=". $row['Emp_id'] . "><button>Delete</button></a></td>";
			        echo "<td><a href=" . "update.php?eid=" . $row['Emp_id'] . "&name=". $row['name'] . "&salary=" . $row['salary'] . "><button>Update</button></a></td>";
			    	echo "</tr>";
			    }
			} else {
			    echo "0 results";
			}
			$conn->close(); 
		?> 
	</table>
	<a href="http://localhost/A/emp_php/index.html"><button>Back</button></a>
	</body>
</html>
