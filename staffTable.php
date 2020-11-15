
<?php 

	include_once"vendor/autoload.php";

	use App\controler\Staff;

	$staff=new Staff;

	if(isset($_GET['delete_id'])){

		$id=$_GET['delete_id'];

		$data=$staff->staffDelete($id);
		header('location:staffTable.php');
	}

	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<style>
	.user{
		width: 1000px;
		margin: 50px auto 0px;
	}
	.user table tr td{
		vertical-align: middle;
		padding: 3px 5px;
	}
	 .user table tr td img{
	 	width: 50px;
	 	height: 50px;
	 	vertical-align: middle;
	 }
	 .user table tbody tr td:first-child{
	 	width: 30px;
	 }
	 .user table tbody tr td:last-child{

	 	text-align: right;
	 	width: 180px;

	 }
</style>
<body>	

	<div class="user">
		<?php 

		if(isset($mess)){
			echo $mess;
		}



		 ?>
		<a class="btn btn-primary" href="index.php">Create new</a>
		<div class="card">
			<div class="card-header">
				<h3>Staff Table</h3>
			</div>
			<div class="card-body">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 

							$data=$staff->allStaff();
							$i=1;
							$data->fetch_assoc();
							while($all_staff=$data->fetch_assoc()):
						 ?>
						<tr>
							<td><?php echo $i;$i++; ?></td>
							<td><?php echo $all_staff['name']; ?></td>
							<td><?php echo $all_staff['email']; ?></td>
							<td><?php echo $all_staff['cell']; ?></td>
							<td><?php echo $all_staff['uname']; ?></td>
							<td>

									<a class="btn btn-sm btn-success" href="staffEdit.php?edit_id=<?php echo $all_staff['id']; ?>">Edit</a>
								    <a id="delete"class="btn btn-sm btn-danger" href="?delete_id=<?php echo $all_staff['id']; ?>">Delete</a>
								    <a class="btn btn-sm btn-primary" href="staffProfile.php?profile_id=<?php echo $all_staff['id']; ?>">View</a>
								
							</td>
						<?php endwhile; ?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	
	<br>
	<br>
	<br>
	<br>

		
		

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script>
		$('a#delete').click(function(){
			let conf=confirm('Are you sure ??');

			if(conf==true){
				return true
			}else{
				return false;
			}
		});
	</script>
</body>
</html>