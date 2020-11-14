<?php 

	include_once "vendor/autoload.php";

	use App\controler\Student;
	use App\controler\Teacher;
	use App\controler\Staff;

	$student=new Student;
	$teacher=new Teacher;
	$staff=new Staff;




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<style>

	body{
		background: #CFB79F;
		margin: 200px auto 0px;
	}
	
	#section .box1{

			width: 350px;
			height: 300px;
			background: url('assets/image/pexels-artem-beliaikin-1153976.jpg') no-repeat;
			background-size:  350px 300px;
			opacity:0.8;

	}
	#section .box1 .btn{
		margin:120px auto;
		margin-left: 100px;
		border: 1px solid #FFCD39;
		color: #FFCD39;
		font-size: 18px;
	}
	#section .box1 .btn:hover{
		transform: scale(1.5);
	}

	#section .box2{

			width: 350px;
			height: 300px;
			background: url('assets/image/pexels-andrea-piacquadio-3772511.jpg') no-repeat;
			background-size:  350px 300px;
			opacity:0.8;

	}
	#section .box2 .btn{
		margin:120px auto;
		margin-left: 80px;
		border: 1px solid #C5C2C5;
		color: #fff;
		font-size: 18px;
	}
	
	#section .box2 .btn:hover{
		transform: scale(1.5);
	}
	#section .im{
		font-size: 20px;
		border: 1px solid #C5C2C5;
		padding: 5px;
		border-radius: 5px;

	}
	#section .im:hover{
		text-decoration: none;
	}

	#section .box3{

			width: 350px;
			height: 300px;
			background: url('assets/image/pexels-pixabay-279949.jpg') no-repeat;
			background-size:  350px 300px;
			opacity:0.8;

	}
	#section .box3 .btn{
		margin:120px auto;
		margin-left: 100px;
		border: 1px solid #C5C2C5;
		color: #fff;
		font-size: 18px;
	}
	#section .box3 .btn:hover{
		transform: scale(1.5);
	}



</style>
<body>

		<div id="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a class="im" href="table.php">View</a>
						<div class="box1">
							<button class="btn btn-outline" data-target="#mod" data-toggle="modal">Student registration</button>
						</div>
						<div class="mo">
							<div id="mod" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
											
										<div class="modal-body">
											
		<?php

		if(isset($_POST['submit'])){

			$name=$_POST['name'];
			$email=$_POST['email'];
			$cell=$_POST['cell'];
			$uname=$_POST['uname'];

		if(empty($name) || empty($email) || empty($cell) || empty($uname)){

			$mess='<p class="alert alert-danger">All flds are require<button class="close" data-dismiss="alert">&times;</button></p>';


		}else{

			$mess=$student->valueSend($name,$email,$cell,$uname);

			


		}

	}



		?>


			<div class="card">
				<div class="card-body">
					<button class="close" data-dismiss="modal">&times;</button>
					<h3>Teacher registration Now</h3>
					
					<?php 

						if(isset($mess)){
							echo $mess;
						}


					 ?>
					
					<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="uname" class="form-control" type="text">
				</div>
				<div class="form-group">				
					<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
				</div>
			</form>
				</div>
			</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<a class="im" href="teachersTable.php">View</a>
						<div class="box2">
							
							<button class="btn btn-outline" data-target="#moda" data-toggle="modal">Teacher registration</button>

						</div>
						<div class="mo">
							<div id="moda" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<?php

		                                      if(isset($_POST['submit'])){

			                                      $name=$_POST['name'];
			                                      $email=$_POST['email'];
			                                      $cell=$_POST['cell'];
			                                      $uname=$_POST['uname'];

		                                      if(empty($name) || empty($email) || empty($cell) || empty($uname)){

			                                      $mess='<p class="alert alert-danger">All flds are require<button class="close" data-dismiss="alert">&times;</button></p>';


		                                      }else{

			                                      $mess=$teacher->teacherData($name,$email,$cell,$uname);

			


		                                      }
                                      
	                                      }



									?>


			<div class="card">
				<div class="card-body">
					<button class="close" data-dismiss="modal">&times;</button>
					<h3>Student registration Now</h3>
					
					<?php 

						if(isset($mess)){
							echo $mess;
						}


					 ?>
					
					<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="uname" class="form-control" type="text">
				</div>
				<div class="form-group">				
					<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
				</div>
			</form>
				</div>
			</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<a class="im" href="staffTable.php">View</a>
						<div class="box3">
							<button class="btn btn-outline" data-target="#modall" data-toggle="modal">Staff registration</button>
						</div>
						<div class="mo">
							<div id="modall" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<?php

		                                      if(isset($_POST['submit'])){

			                                      $name=$_POST['name'];
			                                      $email=$_POST['email'];
			                                      $cell=$_POST['cell'];
			                                      $uname=$_POST['uname'];

		                                      if(empty($name) || empty($email) || empty($cell) || empty($uname)){

			                                      $mess='<p class="alert alert-danger">All flds are require<button class="close" data-dismiss="alert">&times;</button></p>';


		                                    }else{

			                                   $mess=$staff->staffData($name,$email,$cell,$uname);

			


		                                      }
                                      
	                                      }



									?>


			<div class="card">
				<div class="card-body">
					<button class="close" data-dismiss="modal">&times;</button>
					<h3>Staff registration Now</h3>
					
					<?php 

						if(isset($mess)){
							echo $mess;
						}


					 ?>
					
					<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="uname" class="form-control" type="text">
				</div>
				<div class="form-group">				
					<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
				</div>
			</form>
				</div>
			</div
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>