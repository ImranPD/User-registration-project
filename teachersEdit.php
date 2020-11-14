<?php 

	include_once "vendor/autoload.php";

	use App\controler\Teacher;

	$teacher=new Teacher;

	if(isset($_GET['edit_id'])){


		$id=$_GET['edit_id'];

		$data=$teacher->teacherShow($id);
		$showT=$data->fetch_assoc();

	}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $showT['name'] ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

		<?php

		if(isset($_POST['submit'])){

			$name=$_POST['name'];
			$email=$_POST['email'];
			$cell=$_POST['cell'];
			$uname=$_POST['uname'];

		if(empty($name) || empty($email) || empty($cell) || empty($uname)){

			$mess='<p class="alert alert-danger">All flds are require<button class="close" data-dismiss="alert">&times;</button></p>';


		}else{

			$mess=$teacher->teacherUpdate($name,$email,$cell,$uname,$id);
			header('location:teachersTable.php');


		}

	}



		?>


		<div class="wrap shadow rounded">
			<a class="btn btn-warning" href="teachersTable.php">All student</a>
			<div class="card">
				<div class="card-body">
					<h2>Update now</h2>

					<?php 

						if(isset($mess)){
							echo $mess;
						}


					 ?>
					
					<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" value="<?php echo $showT['name'] ?>" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" value="<?php echo $showT['email'] ?>" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" value="<?php echo $showT['cell'] ?>" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="uname" value="<?php echo $showT['uname'] ?>" class="form-control" type="text">
				</div>
				<div class="form-group">				
					<input name="submit" class="btn btn-primary" type="submit" value="update">
				</div>
			</form>
				</div>
			</div>
		</div>

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>