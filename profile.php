<?php 

	include_once"vendor/autoload.php";

	use App\controler\Student;

	$stu=new Student;

	if(isset($_GET['profile_id'])){

		$id=$_GET['profile_id'];

		$data=$stu->viewUser($id);
		
		$profile=$data->fetch_assoc();

	}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $profile['name']; ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/font awesome/css/all.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<style>

		.pro{
			width: 400px;
			margin: 50px auto 0px;
			position: relative;
		}

		.pro .text h3{
			margin: 300px auto 0px;
			text-align: center;
			font-family: ubuntu condensed;
		}
		.pro .text h5{
			text-align: center;
			font-family: candara;
		}
		
	</style>
</head>
<body>

	<div class="pro">
		<a class="btn btn-primary" href="table.php">Back</a>
		<div class="card">
			<div class="card-body">

					<h3 class="text-center"><?php echo $profile['name']; ?></h3>
				    <h5 class="text-center"><?php echo $profile['uname']; ?></h5>
				<table class="table table-striped">
					<tr>
						<td>Name</td>
						<td><?php echo $profile['name']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $profile['email']; ?></td>
					</tr>
					<tr>
						<td>Cell</td>
						<td><?php echo $profile['cell']; ?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><?php echo $profile['uname']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	
	
	<script src="asset/js/jquery-3.5.1.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>