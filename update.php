<!DOCTYPE html>
<html>
<head>
	<title>Update Employee Details</title>
	<link rel="stylesheet" href="mystyle.css"/>
</head>
<body style="background-image:url('img1.jpg')">
	<form method='post' action='update1.php'>
		<div class ='container jumbotron'>
			<div class='row'>
				<div class='col-md-3'>
					Emp_id: <input readonly type='text' size=3 name='eid' value=<?php echo $_GET['eid'];?> >
				</div>
				<div class='col-md-3'>
					Enter Name: <input type='text' name='name' value=<?php echo $_GET['name'];?> >
				</div>
				<div class='col-md-3'>
					Enter Salary: <input type='text' name='salary' value=<?php echo $_GET['salary'];?> >
				</div>
				<div class='col-md-3'>
					Update: <input type='submit' value='YES'>
				</div>
			</div>	
		</div>
	</form>
	<div>
		<div class="row">
			<div class="col-md-12">
				<a href="http://localhost/A/Emp_php/index.html"><button>Back</button></a>
			</div>
		</div>
	</div>
</body>
</html>